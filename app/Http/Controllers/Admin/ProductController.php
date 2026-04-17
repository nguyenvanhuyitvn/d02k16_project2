<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
     //Lấy danh sách các sản phẩm
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.products.list', compact('products'));
    }

    //Hiển thị chi tiết sản phẩm
    public function detail($id) {
        $product = Product::with('category')->findOrFail($id);
        return view('admin.products.detail', compact('product'));
    }

    //Hiển thị giao diện tạo mới sản phẩm (form tạo mới)
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }
    
    //Lưu sản phẩm được tạo mới (Xử lý form tạo mới)
    public function store(StoreProductRequest $request) {
        // Validate dữ liệu đã được thực hiện trong StoreProductRequest
        $data = $request->validated();
        // Tạo mới sản phẩm với dữ liệu đã được xác thực
        $product = new Product();
        $product->name = $data['name'];
        $product->category_id = $data['category_id'];
        $product->description = $data['description'] ?? null;
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];

        if ($request->hasFile('thumbnail')) {
            $product->thumbnail = $request->file('thumbnail')->store('products', 'public');
        }

        $product->save();
        return redirect()->route('admin.products.index')->with('success', 'Thêm sản phẩm thành công');
    }

    //Hiển thị giao diện sửa sản phẩm (form sửa sản phẩm theo id)
    public function edit($id) {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    //Cập nhật thông tin sản phẩm được sửa (Xử lý lưu sản phẩm)
    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        $data = $request->validate(
            [
                'name' => 'required|max:255',
                'category_id' => 'required|exists:categories,id',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'price' => 'required|numeric|min:0',
                'quantity' => 'required|numeric|min:0',
                'description' => 'nullable|string',
            ],
            [
                'name.required' => 'Tên sản phẩm không được để trống',
                'name.max' => 'Tên sản phẩm quá dài',
                'category_id.required' => 'Danh mục không được để trống',
                'category_id.exists' => 'Danh mục không tồn tại',
                'price.required' => 'Giá sản phẩm không được để trống',
                'price.numeric' => 'Giá phải là số',
                'quantity.required' => 'Số lượng không được để trống',
                'quantity.numeric' => 'Số lượng phải là số',
            ]
        );

        $product->name = $data['name'];
        $product->category_id = $data['category_id'];
        $product->description = $data['description'] ?? null;
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];

        if ($request->hasFile('thumbnail')) {
            if ($product->thumbnail && Storage::disk('public')->exists($product->thumbnail)) {
                Storage::disk('public')->delete($product->thumbnail);
            }
            $product->thumbnail = $request->file('thumbnail')->store('products', 'public');
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Cập nhật sản phẩm thành công');
    }

    //Xóa sản phẩm
    public function delete($id) {
        $product = Product::findOrFail($id);

        if ($product->thumbnail && Storage::disk('public')->exists($product->thumbnail)) {
            Storage::disk('public')->delete($product->thumbnail);
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Xóa sản phẩm thành công');
    }
}
