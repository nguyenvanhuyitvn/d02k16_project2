@extends('customers.layouts.app')

@section('title', $category->name)

@section('content')
    <!-- Breadcrumb -->
    <div class="bg-light py-3 mb-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('customer.home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mb-5">
        <!-- Category Header -->
        <div class="mb-5">
            <h1 class="section-title">{{ $category->name }}</h1>
            @if($category->description)
                <p class="lead text-muted">{{ $category->description }}</p>
            @endif
        </div>

        <!-- Sidebar & Products -->
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="mb-0"><i class="bi bi-funnel"></i> Lọc sản phẩm</h5>
                    </div>
                    <div class="card-body">
                        <h6>Danh mục khác</h6>
                        <ul class="list-unstyled">
                            @foreach($categories as $cat)
                                <li class="mb-2">
                                    <a href="{{ route('customer.category', $cat->id) }}" 
                                       class="text-decoration-none {{ $cat->id == $category->id ? 'text-primary fw-bold' : 'text-muted' }}">
                                        {{ $cat->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Products -->
            <div class="col-lg-9">
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
                                        <div class="product-actions">
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
                        <h5>Không có sản phẩm</h5>
                        <p>Danh mục này hiện chưa có sản phẩm nào</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
