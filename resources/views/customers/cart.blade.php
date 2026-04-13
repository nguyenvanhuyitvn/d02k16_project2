@extends('customers.layouts.app')

@section('title', 'Giỏ hàng')

@section('content')
<div class="container pb-5">
    <section class="mb-5">
        <h2 class="section-title">Giỏ hàng của bạn</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('checkout_success'))
            <div class="alert alert-success">{{ session('checkout_success') }}</div>
        @endif

        <div class="row gy-4">
            <div class="col-12">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Sản phẩm</th>
                                        <th class="border-top-0">Giá</th>
                                        <th class="border-top-0">Số lượng</th>
                                        <th class="border-top-0">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($cartItems as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="bg-light rounded p-3">
                                                        <i class="bi bi-box-seam-fill fs-4 text-secondary"></i>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">{{ $item->name }}</h6>
                                                        <small class="text-muted">{{ $item->options->description ?? 'Không có mô tả' }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-price="{{ $item->price }}">{{ number_format($item->price, 0, ',', '.') }}đ</td>
                                            <td>
                                                <form action="{{ route('customer.cart.update') }}" method="post" class="d-flex align-items-center gap-2">
                                                    @csrf
                                                    <input type="hidden" name="row_id" value="{{ $item->rowId }}">
                                                    <input type="number" name="quantity" class="form-control form-control-sm cart-quantity-input" value="{{ $item->qty }}" min="1" data-price="{{ $item->price }}" style="width: 90px;" required>
                                                    <button type="submit" class="btn btn-sm btn-primary">Cập nhật</button>
                                                </form>
                                            </td>
                                            <td class="item-total">
                                                <div class="d-flex justify-content-between align-items-center gap-2">
                                                    <span>{{ number_format($item->price * $item->qty, 0, ',', '.') }}đ</span>
                                                    <form action="{{ route('customer.cart.remove') }}" method="post" class="m-0" onsubmit="return confirm('Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng?');">
                                                        @csrf
                                                        <input type="hidden" name="row_id" value="{{ $item->rowId }}">
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">Xóa</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-5">
                                                Giỏ hàng của bạn hiện đang trống.
                                                <a href="{{ route('customer.home') }}">Mua sắm ngay</a>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form id="cart-form" action="{{ route('customer.cart.prepareCheckout') }}" method="post" class="row gy-4 needs-validation" novalidate>
                @csrf

                <div class="col-lg-7">
                    <div class="card shadow-sm border-0 p-4 mb-4">
                        <h5 class="mb-3">Thông tin thanh toán</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Họ và tên</label>
                                <input type="text" name="customer_name" class="form-control" placeholder="Nguyễn Văn A" required>
                                <div class="invalid-feedback">Vui lòng nhập họ và tên.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Số điện thoại</label>
                                <input type="tel" name="customer_phone" class="form-control" placeholder="0912 345 678" required>
                                <div class="invalid-feedback">Vui lòng nhập số điện thoại.</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" name="customer_email" class="form-control" placeholder="email@example.com" required>
                                <div class="invalid-feedback">Vui lòng nhập email hợp lệ.</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Địa chỉ</label>
                                <input type="text" name="customer_address" class="form-control" placeholder="Số nhà, đường, phường/xã" required>
                                <div class="invalid-feedback">Vui lòng nhập địa chỉ giao hàng.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tỉnh/Thành phố</label>
                                <input type="text" name="customer_city" class="form-control" placeholder="Hà Nội" required>
                                <div class="invalid-feedback">Vui lòng nhập tỉnh/thành phố.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Quận/Huyện</label>
                                <input type="text" name="customer_district" class="form-control" placeholder="Ba Đình" required>
                                <div class="invalid-feedback">Vui lòng nhập quận/huyện.</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Ghi chú</label>
                                <textarea name="customer_note" class="form-control" rows="3" placeholder="Ghi chú cho đơn hàng"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm border-0 p-4">
                        <h5 class="mb-3">Mã giảm giá</h5>
                        <div class="row g-3">
                            <div class="col-sm-8">
                                <input type="text" id="discount-code" name="discount_code" class="form-control" placeholder="Nhập mã giảm giá">
                            </div>
                            <div class="col-sm-4">
                                <button type="button" id="apply-discount" class="btn btn-product-action btn-detail w-100">Áp dụng</button>
                            </div>
                            <div class="col-12">
                                <small id="discount-message" class="text-success d-none"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card shadow-sm border-0 p-4">
                        <h5 class="mb-3">Tóm tắt đơn hàng</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tạm tính</span>
                            <strong id="cart-subtotal" data-subtotal="{{ $subtotal }}">{{ number_format($subtotal, 0, ',', '.') }}đ</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Khuyến mãi</span>
                            <strong id="cart-discount">0đ</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Phí vận chuyển</span>
                            <strong id="cart-shipping">50.000đ</strong>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold">Tổng cộng</span>
                            <strong id="cart-grand-total">{{ number_format($subtotal + 50000, 0, ',', '.') }}đ</strong>
                        </div>
                        <button type="submit" class="btn btn-product-action btn-add-cart w-100">Tiến hành thanh toán</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

@section('extra-js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const shippingFee = 50000;
        let discountAmount = 0;

        const formatCurrency = (value) => value.toLocaleString('vi-VN') + 'đ';
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const discountUrl = '{{ route('customer.cart.applyDiscount') }}';
        const quantityInputs = Array.from(document.querySelectorAll('.cart-quantity-input'));
        const subtotalEl = document.getElementById('cart-subtotal');
        const discountEl = document.getElementById('cart-discount');
        const shippingEl = document.getElementById('cart-shipping');
        const totalEl = document.getElementById('cart-grand-total');
        const discountMessage = document.getElementById('discount-message');
        const discountCodeInput = document.getElementById('discount-code');
        const applyDiscountBtn = document.getElementById('apply-discount');

        const calculateSubtotal = () => {
            let subtotal = 0;
            quantityInputs.forEach((input) => {
                const price = Number(input.dataset.price || 0);
                const quantity = Math.max(1, Number(input.value || 1));
                subtotal += price * quantity;
            });
            return subtotal;
        };

        const updateTotals = () => {
            const currentSubtotal = calculateSubtotal();
            discountEl.textContent = formatCurrency(discountAmount);
            shippingEl.textContent = formatCurrency(shippingFee);
            subtotalEl.textContent = formatCurrency(currentSubtotal);
            totalEl.textContent = formatCurrency(Math.max(0, currentSubtotal - discountAmount + shippingFee));
        };

        const applyDiscount = async () => {
            const code = discountCodeInput.value.trim().toUpperCase();
            if (!code) {
                discountAmount = 0;
                discountMessage.textContent = 'Vui lòng nhập mã giảm giá.';
                discountMessage.classList.remove('d-none', 'text-success');
                discountMessage.classList.add('text-danger');
                updateTotals();
                return;
            }

            try {
                const response = await fetch(discountUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({
                        discount_code: code,
                        subtotal: calculateSubtotal(),
                    }),
                });

                const result = await response.json();

                if (result.success) {
                    discountAmount = Number(result.discount_amount || 0);
                    discountMessage.textContent = result.message;
                    discountMessage.classList.remove('d-none', 'text-danger');
                    discountMessage.classList.add('text-success');
                } else {
                    discountAmount = 0;
                    discountMessage.textContent = result.message || 'Mã giảm giá không hợp lệ.';
                    discountMessage.classList.remove('d-none', 'text-success');
                    discountMessage.classList.add('text-danger');
                }
            } catch (error) {
                discountAmount = 0;
                discountMessage.textContent = 'Lỗi khi kiểm tra mã giảm giá. Vui lòng thử lại.';
                discountMessage.classList.remove('d-none', 'text-success');
                discountMessage.classList.add('text-danger');
            }

            updateTotals();
        };

        applyDiscountBtn.addEventListener('click', function (event) {
            event.preventDefault();
            applyDiscount();
        });

        updateTotals();
    });
</script>
@endsection
