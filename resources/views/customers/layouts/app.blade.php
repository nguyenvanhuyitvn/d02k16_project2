<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Online Shop') - Cửa hàng trực tuyến</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --success-color: #27ae60;
            --danger-color: #e74c3c;
            --light-bg: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Header & Navigation */
        .navbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: white !important;
        }

        .nav-link {
            color: rgba(255,255,255,0.8) !important;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
            margin-bottom: 3rem;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero-section p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Category Section */
        .category-section {
            margin-bottom: 3rem;
        }

        .category-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .category-card-body {
            padding: 1.5rem;
            text-align: center;
        }

        .category-card h5 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .category-card .badge {
            background-color: var(--secondary-color);
            padding: 0.3rem 0.8rem;
            font-size: 0.75rem;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        /* Product Card */
        .product-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            position: relative;
            overflow: hidden;
        }

        .product-card:hover .product-image {
            filter: brightness(0.9);
        }

        .product-category {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(255,255,255,0.9);
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--secondary-color);
        }

        .product-body {
            padding: 1.25rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            line-height: 1.3;
            min-height: 2.6rem;
        }

        .product-description {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.4;
            flex-grow: 1;
        }

        .product-footer {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }

        .product-footer .product-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
            width: 100%;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--success-color);
        }

        .btn-product-action {
            border: none;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.25s ease;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-add-cart {
            background: #f7c948;
            color: #1f1f1f;
        }

        .btn-detail {
            background: var(--secondary-color);
            color: white;
        }

        .product-actions {
            display: flex;
            flex-wrap: nowrap;
            gap: 0.75rem;
            justify-content: flex-end;
            align-items: center;
            width: 100%;
        }

        .product-actions .btn-product-action {
            flex: 0 0 auto;
            width: auto;
            max-width: none;
            align-self: auto;
            white-space: nowrap;
        }

        .btn-product-action:hover {
            transform: scale(1.05);
            filter: brightness(0.95);
        }

        .stock-info {
            font-size: 0.75rem;
            margin-top: 0.5rem;
            padding: 0.25rem 0.5rem;
            border-radius: 3px;
            text-align: center;
        }

        .stock-info.in-stock {
            background: #d4edda;
            color: #155724;
        }

        .stock-info.low-stock {
            background: #fff3cd;
            color: #856404;
        }

        .stock-info.out-stock {
            background: #f8d7da;
            color: #721c24;
        }

        /* Section Title */
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--secondary-color);
            border-radius: 2px;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .empty-state i {
            font-size: 3rem;
            color: #ccc;
            margin-bottom: 1rem;
        }

        .empty-state h5 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        /* Footer */
        footer {
            background: var(--primary-color);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        footer a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
        }

        footer a:hover {
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 1.8rem;
            }

            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 1.5rem;
            }

            .section-title {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .navbar-brand {
                font-size: 1.2rem;
            }
        }
    </style>
    @yield('extra-css')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('customer.home') }}">
                <i class="bi bi-shop"></i> Online Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.home') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown">
                            Danh mục
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            @foreach($categories as $cat)
                                <li>
                                    <a class="dropdown-item" href="{{ route('customer.category', $cat->id) }}">
                                        {{ $cat->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.index') }}">
                            <i class="bi bi-cart3"></i> Giỏ hàng
                            <span class="badge bg-warning text-dark ms-1">{{ \Gloudemans\Shoppingcart\Facades\Cart::count() }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5>Về chúng tôi</h5>
                    <p>Cửa hàng trực tuyến hàng đầu cung cấp các sản phẩm chất lượng cao với giá cạnh tranh.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Liên kết nhanh</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('customer.home') }}">Trang chủ</a></li>
                        <li><a href="#about">Về chúng tôi</a></li>
                        <li><a href="#contact">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Hỗ trợ</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                        <li><a href="#">Chính sách trả hàng</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Liên hệ</h5>
                    <p>
                        <i class="bi bi-telephone"></i> 0123.456.789<br>
                        <i class="bi bi-envelope"></i> support@onlineshop.com<br>
                        <i class="bi bi-geo-alt"></i> Tp. HCM, Việt Nam
                    </p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2026 Online Shop. Bảo lưu mọi quyền. Thiết kế bởi Your Company</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addCartButtons = document.querySelectorAll('.btn-add-cart[data-product-id]');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const addUrl = '{{ route('customer.cart.add') }}';

            addCartButtons.forEach((button) => {
                button.addEventListener('click', async function (event) {
                    event.preventDefault();
                    const productId = button.dataset.productId;
                    if (!productId) {
                        return;
                    }

                    try {
                        const response = await fetch(addUrl, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken,
                                'Accept': 'application/json',
                            },
                            body: JSON.stringify({
                                product_id: productId,
                                quantity: 1,
                            }),
                        });

                        if (!response.ok) {
                            throw new Error('Không thể thêm vào giỏ hàng.');
                        }

                        const result = await response.json();
                        if (result.success === false) {
                            throw new Error(result.message || 'Lỗi khi thêm vào giỏ hàng.');
                        }

                        window.location.reload();
                    } catch (error) {
                        console.error(error);
                        alert(error.message || 'Lỗi khi thêm sản phẩm vào giỏ hàng.');
                    }
                });
            });
        });
    </script>
    @yield('extra-js')
</body>
</html>
