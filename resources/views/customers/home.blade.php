@extends('customers.layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1><i class="bi bi-star-fill"></i> Chào mừng đến cửa hàng online</h1>
            <p class="mt-3">Khám phá những sản phẩm chất lượng cao với giá cạnh tranh nhất</p>
        </div>
    </section>

    <div class="container">
        <!-- Categories Section -->
        <section class="category-section">
            <h2 class="section-title">Danh Mục Sản Phẩm</h2>
            
            @if($categories->count() > 0)
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-md-4 col-lg-3 mb-4">
                            <a href="{{ route('customer.category', $category->id) }}" class="category-card">
                                <div class="product-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                    <i class="bi bi-tag-fill"></i>
                                </div>
                                <div class="category-card-body">
                                    <h5>{{ $category->name }}</h5>
                                    <p class="mb-0" style="font-size: 0.85rem; color: #666;">
                                        {{ $category->products()->count() }} sản phẩm
                                    </p>
                                    @if($category->description)
                                        <small class="text-muted d-block mt-2">{{ Str::limit($category->description, 50) }}</small>
                                    @endif
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <i class="bi bi-folder-open"></i>
                    <h5>Chưa có danh mục</h5>
                    <p>Vui lòng quay lại sau</p>
                </div>
            @endif
        </section>

        <!-- Products Section -->
        <section class="mb-5">
            <h2 class="section-title">Sản Phẩm Nổi Bật</h2>
            
            @if($products->count() > 0)
                <div class="product-grid">
                    @foreach($products as $product)
                        <div class="product-card">
                            <div class="product-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                <i class="bi bi-box-seam-fill" style="font-size: 3rem;"></i>
                                <span class="product-category">{{ $product->category->name ?? 'N/A' }}</span>
                            </div>
                            <div class="product-body">
                                <h5 class="product-title">{{ $product->name }}</h5>
                                <p class="product-description">{{ Str::limit($product->description, 80) }}</p>
                                
                                <div class="product-footer">
                                    <div class="product-info">
                                        <div class="product-price">
                                            {{ number_format($product->price, 0, ',', '.') }}đ
                                        </div>
                                        <div class="stock-info @if($product->quantity > 10) in-stock @elseif($product->quantity > 0) low-stock @else out-stock @endif">
                                            @if($product->quantity > 10)
                                                <i class="bi bi-check-circle"></i> Còn hàng
                                            @elseif($product->quantity > 0)
                                                <i class="bi bi-exclamation-circle"></i> Sắp hết
                                            @else
                                                <i class="bi bi-x-circle"></i> Hết hàng
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-actions d-flex">
                                        <button type="button" class="btn btn-product-action btn-add-cart" data-product-id="{{ $product->id }}">
                                            <i class="bi bi-cart-plus"></i> Thêm giỏ hàng
                                        </button>
                                        <a href="{{ route('customer.product-detail', $product->id) }}" class="btn btn-product-action btn-detail">
                                            <i class="bi bi-eye"></i> Chi tiết
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <i class="bi bi-box"></i>
                    <h5>Chưa có sản phẩm</h5>
                    <p>Chúng tôi đang cập nhật kho hàng. Vui lòng quay lại sau</p>
                </div>
            @endif
        </section>

        <!-- Features Section -->
        <section class="py-5 mb-5">
            <div class="row">
                <div class="col-md-3 mb-4 text-center">
                    <div style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h5>Giao hàng nhanh</h5>
                    <p class="text-muted">Giao hàng trong 24-48 giờ đến toàn bộ Việt Nam</p>
                </div>
                <div class="col-md-3 mb-4 text-center">
                    <div style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5>Chất lượng đảm bảo</h5>
                    <p class="text-muted">Sản phẩm chính hãng, được kiểm chất lượng nghiêm ngặt</p>
                </div>
                <div class="col-md-3 mb-4 text-center">
                    <div style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;">
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <h5>Giá cạnh tranh</h5>
                    <p class="text-muted">Giá rẻ nhất thị trường, ưu đãi thường xuyên</p>
                </div>
                <div class="col-md-3 mb-4 text-center">
                    <div style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 1rem;">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h5>Hỗ trợ 24/7</h5>
                    <p class="text-muted">Tư vấn và hỗ trợ khách hàng mọi lúc</p>
                </div>
            </div>
        </section>
    </div>
@endsection
