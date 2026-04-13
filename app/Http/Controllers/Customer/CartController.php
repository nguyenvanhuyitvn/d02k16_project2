<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartController extends Controller
{
    private const SHIPPING_FEE = 50000;

    public function index()
    {
        $categories = Category::where('status', 1)->get();
        $cartItems = Cart::content();
        $subtotal = $cartItems->sum(fn ($item) => $item->price * $item->qty);

        return view('customers.cart', compact('categories', 'cartItems', 'subtotal'));
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $product = Product::findOrFail($data['product_id']);

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $data['quantity'] ?? 1,
            'price' => $product->price,
            'options' => [
                'description' => Str::limit($product->description, 80),
                'category' => $product->category->name ?? null,
            ],
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Sản phẩm đã được thêm vào giỏ hàng.',
                'cart_count' => Cart::count(),
            ]);
        }

        return redirect()->route('customer.index')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }

    public function update(Request $request)
    {
        
        $data = $request->validate([
            'row_id' => 'required|string',
            'quantity' => 'required|integer|min:1',
        ]);
        // dd($data);
        Cart::update($data['row_id'], $data['quantity']);

        return back()->with('success', 'Số lượng giỏ hàng đã được cập nhật.');
    }

    public function remove(Request $request)
    {
        $data = $request->validate(['row_id' => 'required|string']);
        Cart::remove($data['row_id']);

        return back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    public function applyDiscount(Request $request)
    {
        $request->validate([
            'discount_code' => 'required|string|max:50',
            'subtotal' => 'required|numeric|min:0',
        ]);

        $code = strtoupper(trim($request->input('discount_code')));
        $subtotal = $request->input('subtotal');

        $result = $this->resolveDiscount($code, $subtotal);

        return response()->json($result);
    }

    private function resolveDiscount(string $code, float $subtotal): array
    {
        $coupon = DB::table('discounts')
            ->where('code', $code)
            ->where('active', 1)
            ->where(function ($query) {
                $query->whereNull('expires_at')
                      ->orWhere('expires_at', '>', now());
            })
            ->first();

        if (! $coupon) {
            return [
                'success' => false,
                'message' => 'Mã giảm giá không hợp lệ hoặc đã hết hạn.',
                'discount_amount' => 0,
            ];
        }

        if ($coupon->type === 'fixed') {
            $discountAmount = min($subtotal, $coupon->value);
        } else {
            $discountAmount = round($subtotal * ($coupon->value / 100));
        }

        return [
            'success' => true,
            'message' => 'Áp dụng mã thành công - Giảm ' . number_format($discountAmount, 0, ',', '.') . 'đ',
            'discount_amount' => $discountAmount,
        ];
    }

    public function prepareCheckout(Request $request)
    {
        if (Cart::content()->isEmpty()) {
            return redirect()->route('customer.index')->with('error', 'Giỏ hàng của bạn đang trống.');
        }

        $checkoutData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_email' => 'required|email|max:255',
            'customer_address' => 'required|string|max:500',
            'customer_city' => 'required|string|max:100',
            'customer_district' => 'required|string|max:100',
            'customer_note' => 'nullable|string|max:1000',
            'discount_code' => 'nullable|string|max:50',
        ]);

        $subtotal = Cart::content()->sum(fn ($item) => $item->price * $item->qty);

        if (! empty($checkoutData['discount_code'])) {
            $discountResult = $this->resolveDiscount(strtoupper(trim($checkoutData['discount_code'])), $subtotal);
            if (! $discountResult['success']) {
                return back()->withErrors(['discount_code' => $discountResult['message']])->withInput();
            }

            $checkoutData['discount_amount'] = $discountResult['discount_amount'];
        } else {
            $checkoutData['discount_amount'] = 0;
        }

        session(['checkout_data' => $checkoutData]);

        return redirect()->route('customer.checkout');
    }

    public function checkoutPage()
    {
        $checkoutData = session('checkout_data');

        if (! $checkoutData) {
            return redirect()->route('customer.index');
        }

        $cartItems = Cart::content();
        if ($cartItems->isEmpty()) {
            return redirect()->route('customer.index');
        }

        $subtotal = $cartItems->sum(fn ($item) => $item->price * $item->qty);
        $discountAmount = $checkoutData['discount_amount'] ?? 0;
        $grandTotal = max(0, $subtotal - $discountAmount + self::SHIPPING_FEE);

        $categories = Category::where('status', 1)->get();
        return view('customers.checkout', compact('categories', 'checkoutData', 'cartItems', 'subtotal', 'discountAmount', 'grandTotal'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:cod,bank_transfer,card',
            'confirm_checkout' => 'required|boolean',
        ]);

        $checkoutData = session('checkout_data');
        $cartItems = Cart::content();

        if (! $checkoutData || $cartItems->isEmpty()) {
            return redirect()->route('customer.index');
        }

        $subtotal = $cartItems->sum(fn ($item) => $item->price * $item->qty);
        if (! empty($checkoutData['discount_code'])) {
            $discountResult = $this->resolveDiscount(strtoupper(trim($checkoutData['discount_code'])), $subtotal);
            $checkoutData['discount_amount'] = $discountResult['success'] ? $discountResult['discount_amount'] : 0;
        } else {
            $checkoutData['discount_amount'] = 0;
        }

        $shippingFee = self::SHIPPING_FEE;
        $tax = 0;
        $total = max(0, $subtotal - $checkoutData['discount_amount'] + $shippingFee + $tax);

        DB::transaction(function () use ($request, $checkoutData, $cartItems, $subtotal, $shippingFee, $tax, $total) {
            $orderId = DB::table('orders')->insertGetId([
                'user_id' => Auth::id(),
                'order_number' => 'DH-' . now()->format('YmdHis') . '-' . rand(1000, 9999),
                'recipient_name' => $checkoutData['customer_name'],
                'phone' => $checkoutData['customer_phone'],
                'email' => $checkoutData['customer_email'] ?? null,
                'shipping_address' => $checkoutData['customer_address'],
                'shipping_note' => $checkoutData['customer_note'] ?? null,
                'status' => 'pending',
                'sub_total' => $subtotal,
                'shipping_fee' => $shippingFee,
                'tax' => $tax,
                'discount_amount' => $checkoutData['discount_amount'],
                'total' => $total,
                'payment_method' => $request->input('payment_method'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $orderDetails = $cartItems->map(function ($item) use ($orderId) {
                return [
                    'order_id' => $orderId,
                    'product_id' => $item->id,
                    'product_name' => $item->name,
                    'sku' => $item->options->sku ?? null,
                    'unit_price' => $item->price,
                    'quantity' => $item->qty,
                    'total' => $item->price * $item->qty,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            })->toArray();

            DB::table('order_details')->insert($orderDetails);
        });

        Cart::destroy();
        session()->forget('checkout_data');

        return redirect()->route('customer.index')->with('checkout_success', 'Đơn hàng của bạn đã được xác nhận. Cảm ơn bạn!');
    }
}
