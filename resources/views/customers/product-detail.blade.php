@extends('customers.layouts.app')

@section('title', $product->name)

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-light py-3 mb-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('customer.home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('customer.category', $product->category_id) }}">
                            {{ $product->category->name ?? 'N/A' }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-5 mb-4">
                <div class="card border-0">
                    <div class="product-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 400px;">
                        <i class="bi bi-box-seam-fill" style="font-size: 8rem; color: rgba(255,255,255,0.5);"></i>
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-7">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <!-- Breadcrumb Category -->
                        <div class="mb-3">
                            <span class="badge bg-secondary">
                                {{ $product->category->name ?? 'N/A' }}
                            </span>
                        </div>

                        <!-- Product Title -->
                        <h1 class="card-title mb-2">{{ $product->name }}</h1>

                        <!-- Rating & Reviews -->
                        <div class="mb-3">
                            <span class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </span>
                            <small class="text-muted ms-2">(125 đánh giá)</small>
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <div class="h2" style="color: var(--success-color);">
                                {{ number_format($product->price, 0, ',', '.') }}đ
                            </div>
                            <small class="text-muted">
                                <i class="bi bi-info-circle"></i> Giá có thể thay đổi
                            </small>
                        </div>

                        <!-- Stock Status -->
                        <div class="alert @if($product->quantity > 10) alert-success @elseif($product->quantity > 0) alert-warning @else alert-danger @endif mb-3">
                            @if($product->quantity > 10)
                                <i class="bi bi-check-circle"></i> Sản phẩm còn hàng
                            @elseif($product->quantity > 0)
                                <i class="bi bi-exclamation-triangle"></i> Chỉ còn {{ $product->quantity }} sản phẩm
                            @else
                                <i class="bi bi-x-circle"></i> Sản phẩm hết hàng
                            @endif
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <h5>Mô tả sản phẩm</h5>
                            <p class="text-muted">{{ $product->description }}</p>
                        </div>

                        <!-- Product Info -->
                        <div class="table-responsive mb-4">
                            <table class="table table-borderless">
                                <tr>
                                    <td class="fw-bold">Mã sản phẩm:</td>
                                    <td>{{ 'SP-' . str_pad($product->id, 5, '0', STR_PAD_LEFT) }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Danh mục:</td>
                                    <td>{{ $product->category->name ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Kho:</td>
                                    <td>{{ $product->quantity }} sản phẩm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Cập nhật:</td>
                                    <td>{{ $product->updated_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>

                        <!-- Add to Cart -->
                        <div class="d-flex gap-3 mb-4">
                            @if($product->quantity > 0)
                                <form action="{{ route('customer.cart.add') }}" method="post" class="d-flex gap-3 flex-grow-1">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="btn btn-lg btn-primary flex-grow-1">
                                        <i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng
                                    </button>
                                </form>
                                <button class="btn btn-lg btn-outline-secondary">
                                    <i class="bi bi-heart"></i>
                                </button>
                            @else
                                <button class="btn btn-lg btn-secondary flex-grow-1" disabled>
                                    <i class="bi bi-x-circle"></i> Hết hàng
                                </button>
                            @endif
                        </div>

                        <!-- Shipping Info -->
                        <div class="card bg-light border-0">
                            <div class="card-body">
                                <h6 class="mb-3"><i class="bi bi-truck"></i> Thông tin giao hàng</h6>
                                <div class="mb-2">
                                    <small class="text-muted"><i class="bi bi-check-circle"></i> Miễn phí vận chuyển cho đơn từ 500k</small>
                                </div>
                                <div class="mb-2">
                                    <small class="text-muted"><i class="bi bi-check-circle"></i> Giao hàng nhanh 24-48 giờ</small>
                                </div>
                                <div class="mb-2">
                                    <small class="text-muted"><i class="bi bi-check-circle"></i> Hỗ trợ thanh toán đa dạng</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        @if($relatedProducts->count() > 0)
            <hr class="my-5">
            <section>
                <h3 class="section-title">Sản Phẩm Liên Quan</h3>
                <div class="product-grid">
                    @foreach($relatedProducts as $relProduct)
                        <div class="product-card">
                            <div class="product-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                <i class="bi bi-box-seam-fill" style="font-size: 3rem;"></i>
                                <span class="product-category">{{ $relProduct->category->name ?? 'N/A' }}</span>
                            </div>
                            <div class="product-body">
                                <h5 class="product-title">{{ $relProduct->name }}</h5>
                                <p class="product-description">{{ Str::limit($relProduct->description, 80) }}</p>
                                
                                <div class="product-footer">
                                    <div class="product-info">
                                        <div class="product-price">
                                            {{ number_format($relProduct->price, 0, ',', '.') }}đ
                                        </div>
                                        <div class="stock-info @if($relProduct->quantity > 10) in-stock @elseif($relProduct->quantity > 0) low-stock @else out-stock @endif">
                                            @if($relProduct->quantity > 10)
                                                <i class="bi bi-check-circle"></i> Còn hàng
                                            @elseif($relProduct->quantity > 0)
                                                <i class="bi bi-exclamation-circle"></i> Sắp hết
                                            @else
                                                <i class="bi bi-x-circle"></i> Hết hàng
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <button type="button" class="btn btn-product-action btn-add-cart" data-product-id="{{ $relProduct->id }}">
                                            <i class="bi bi-cart-plus"></i> Thêm giỏ hàng
                                        </button>
                                        <a href="{{ route('customer.product-detail', $relProduct->id) }}" class="btn btn-product-action btn-detail">
                                            <i class="bi bi-eye"></i> Chi tiết
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
    </div>
@endsection
