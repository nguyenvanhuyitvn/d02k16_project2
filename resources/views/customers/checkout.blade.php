@extends('customers.layouts.app')

@section('title', 'Thanh toán')

@section('content')
<div class="container pb-5">
    <section class="mb-5">
        <h2 class="section-title">Thanh toán</h2>

        @if(session('checkout_success'))
            <div class="alert alert-success">{{ session('checkout_success') }}</div>
        @endif

        <div class="row gy-4">
            <div class="col-xl-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Xác nhận thông tin đơn hàng</h5>
                        <p>Bạn đang xem lại thông tin đã nhập trên trang giỏ hàng. Nếu muốn thay đổi, hãy quay lại giỏ hàng và cập nhật trước khi xác nhận.</p>

                        <div class="mb-4">
                            <div class="fw-semibold mb-2">Thông tin người nhận</div>
                            <p class="mb-1"><strong>Người nhận:</strong> {{ $checkoutData['customer_name'] }}</p>
                            <p class="mb-1"><strong>Điện thoại:</strong> {{ $checkoutData['customer_phone'] }}</p>
                            <p class="mb-1"><strong>Email:</strong> {{ $checkoutData['customer_email'] }}</p>
                            <p class="mb-0"><strong>Địa chỉ:</strong> {{ $checkoutData['customer_address'] }}, {{ $checkoutData['customer_district'] }}, {{ $checkoutData['customer_city'] }}</p>
                            @if(!empty($checkoutData['customer_note']))
                                <p class="mb-0"><strong>Ghi chú:</strong> {{ $checkoutData['customer_note'] }}</p>
                            @endif
                        </div>

                        <div class="card shadow-sm border-0 p-4 mb-4">
                            <h5 class="mb-3">Chi tiết đơn hàng</h5>
                            <ul class="list-group list-group-flush">
                                @foreach($cartItems as $item)
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-semibold">{{ $item->name }}</div>
                                            <small>Số lượng: {{ $item->qty }}</small>
                                        </div>
                                        <div>{{ number_format($item->price * $item->qty, 0, ',', '.') }}đ</div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="card shadow-sm border-0 p-4">
                            <h5 class="mb-3">Phương thức thanh toán</h5>
                            <form action="{{ route('customer.cart.checkout') }}" method="post">
                                @csrf
                                <input type="hidden" name="confirm_checkout" value="1">

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="payment_method" id="payment-cod" value="cod" checked>
                                    <label class="form-check-label" for="payment-cod">Thanh toán khi nhận hàng (COD)</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="payment_method" id="payment-bank" value="bank_transfer">
                                    <label class="form-check-label" for="payment-bank">Chuyển khoản ngân hàng</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="payment_method" id="payment-card" value="card">
                                    <label class="form-check-label" for="payment-card">Thanh toán thẻ</label>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-product-action btn-add-cart w-100">Xác nhận thanh toán</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Tóm tắt đơn hàng</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Sản phẩm</span>
                            <span>{{ $cartItems->sum('qty') }} mục</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tạm tính</span>
                            <strong>{{ number_format($subtotal, 0, ',', '.') }}đ</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Khuyến mãi</span>
                            <strong>{{ $discountAmount > 0 ? '-' . number_format($discountAmount, 0, ',', '.') . 'đ' : '0đ' }}</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Phí vận chuyển</span>
                            <strong>50.000đ</strong>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold">Tổng cộng</span>
                            <strong class="fs-5">{{ number_format($grandTotal, 0, ',', '.') }}đ</strong>
                        </div>
                        <a href="{{ route('customer.index') }}" class="btn btn-outline-secondary w-100">Quay lại giỏ hàng</a>
                    </div>
                </div>

                <div class="card shadow-sm border-0 p-4">
                    <h5 class="mb-4">Thông tin</h5>
                    <p class="mb-2"><strong>Bảo mật:</strong> Thông tin của bạn được bảo mật hoàn toàn.</p>
                    <p class="mb-0"><strong>Hỗ trợ:</strong> 1900-1234 | support@onlineshop.com</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection