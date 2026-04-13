<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chỉnh sửa người dùng - Admin</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Chỉnh sửa người dùng" />
    <meta name="author" content="Nguyễn Văn Huy" />
    <meta name="description" content="Trang chỉnh sửa thông tin người dùng" />
    <meta name="keywords" content="admin, dashboard, users, edit" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />
    <!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Trang chủ</a></li>
                    <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Liên hệ</a></li>
                </ul>
                <!--end::Start Navbar Links-->
                <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto">
                    <!--begin::Navbar Search-->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <!--end::Navbar Search-->
                </ul>
                <!--end::End Navbar Links-->
            </div>
            <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="./index.html" class="brand-link">
                    <!--begin::Brand Image-->
                    <img src="{{ asset('dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                        class="brand-image opacity-75 shadow" />
                    <!--end::Brand Image-->
                    <!--begin::Brand Text-->
                    <span class="brand-text fw-light">AdminLTE 4</span>
                    <!--end::Brand Text-->
                </a>
                <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">QUẢN LÝ NGƯỜI DÙNG</li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon bi bi-box-seam-fill"></i>
                                <p>
                                    Người dùng
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Thêm mới</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">QUẢN LÝ SẢN PHẨM</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-pencil-square"></i>
                                <p>
                                    Danh mục
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Thêm mới</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-clipboard-fill"></i>
                                <p>
                                    Sản phẩm
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Thêm mới</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">KINH DOANH</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-tree-fill"></i>
                                <p>
                                    Đơn hàng
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">THỐNG KÊ</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Doanh thu
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                        <p>
                                            Doanh thu
                                            <i class="nav-arrow bi bi-chevron-right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>Doanh thu theo tháng</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>Doanh thu theo quý</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>Doanh thu theo năm</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                        <p>
                                            Trend
                                            <i class="nav-arrow bi bi-chevron-right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>Sản phẩm bán chạy</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>Sản phẩm bán kém</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Tồn kho</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">CÀI ĐẶT</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-gear-fill"></i>
                                <p>
                                    Cấu hình
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                        </li>
                    </ul>
                    <!--end::Sidebar Menu-->
                </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Chỉnh sửa người dùng</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                                <li class="breadcrumb-item active">Chỉnh sửa</li>
                            </ol>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin cá nhân</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="fullname" placeholder="Nhập họ và tên" value="Nguyễn Văn A" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" placeholder="Nhập email" value="nguyenvana@example.com" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại" value="0912345678" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address" class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ" value="123 Nguyễn Huệ, Quận 1, TP.HCM">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="city" class="form-label">Thành phố</label>
                                                    <input type="text" class="form-control" id="city" placeholder="Nhập thành phố" value="TP. Hồ Chí Minh">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="district" class="form-label">Quận/Huyện</label>
                                                    <input type="text" class="form-control" id="district" placeholder="Nhập quận/huyện" value="Quận 1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="company" class="form-label">Công ty</label>
                                            <input type="text" class="form-control" id="company" placeholder="Nhập tên công ty" value="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="jobtitle" class="form-label">Chức danh</label>
                                            <input type="text" class="form-control" id="jobtitle" placeholder="Nhập chức danh" value="">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin tài khoản</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Mật khẩu đăng nhập</label>
                                            <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu mới (để trống nếu không thay đổi)">
                                        </div>

                                        <div class="mb-3">
                                            <label for="confirm_password" class="form-label">Xác nhận mật khẩu</label>
                                            <input type="password" class="form-control" id="confirm_password" placeholder="Nhập lại mật khẩu">
                                        </div>

                                        <div class="mb-3">
                                            <label for="role" class="form-label">Vai trò <span class="text-danger">*</span></label>
                                            <select class="form-select" id="role" required>
                                                <option value="">-- Chọn vai trò --</option>
                                                <option value="customer" selected>Khách hàng</option>
                                                <option value="seller">Người bán</option>
                                                <option value="admin">Quản trị viên</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="status" class="form-label">Trạng thái <span class="text-danger">*</span></label>
                                            <select class="form-select" id="status" required>
                                                <option value="active" selected>Hoạt động</option>
                                                <option value="inactive">Vô hiệu hóa</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Ảnh đại diện</h3>
                                </div>
                                <div class="card-body text-center">
                                    <img src="https://via.placeholder.com/200x200" alt="Avatar" class="img-fluid rounded-circle mb-3" width="150">
                                    <div class="mb-3">
                                        <input type="file" class="form-control" accept="image/*">
                                    </div>
                                    <small class="text-muted">Chọn ảnh JPG, PNG hoặc GIF (Tối đa 2MB)</small>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin khác</h3>
                                </div>
                                <div class="card-body">
                                    @if(isset($user) && $user->role == 'customer')
                                        <div class="mb-3">
                                            <label class="form-label">Ngày tạo:</label>
                                            <p class="form-control-plaintext">{{ $user->created_at ?? '05/02/2026' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Lần đăng nhập cuối:</label>
                                            <p class="form-control-plaintext">{{ $user->last_login ?? '09/02/2026 14:30' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tổng đơn hàng:</label>
                                            <p class="form-control-plaintext">{{ $user->total_orders ?? '5' }} đơn</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tổng chi tiêu:</label>
                                            <p class="form-control-plaintext">{{ isset($user->total_spent) ? number_format($user->total_spent,0,',','.') . ' ₫' : '25,500,000 ₫' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Đơn hàng gần nhất:</label>
                                            <p class="form-control-plaintext">{{ $user->last_order ?? '#DH-010' }}</p>
                                        </div>
                                    @elseif(isset($user) && $user->role == 'seller')
                                        <div class="mb-3">
                                            <label class="form-label">Ngày tạo:</label>
                                            <p class="form-control-plaintext">{{ $user->created_at ?? '05/02/2026' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tổng doanh thu:</label>
                                            <p class="form-control-plaintext">{{ isset($user->total_revenue) ? number_format($user->total_revenue,0,',','.') . ' ₫' : '12,500,000 ₫' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Số sản phẩm:</label>
                                            <p class="form-control-plaintext">{{ $user->products_count ?? '12' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Đơn đang xử lý:</label>
                                            <p class="form-control-plaintext">{{ $user->orders_processing ?? '2' }}</p>
                                        </div>
                                    @else
                                        <div class="mb-3">
                                            <label class="form-label">Ngày tạo:</label>
                                            <p class="form-control-plaintext">{{ $user->created_at ?? '05/02/2026' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Vai trò/Quyền:</label>
                                            <p class="form-control-plaintext">{{ $user->role ?? 'admin' }} @if(isset($user->permissions)) - {{ implode(', ', $user->permissions) }} @endif</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Lần đăng nhập cuối:</label>
                                            <p class="form-control-plaintext">{{ $user->last_login ?? '09/02/2026 14:30' }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Hoạt động gần nhất:</label>
                                            <p class="form-control-plaintext">{{ $user->recent_activity ?? 'Đã chỉnh sửa sản phẩm #123' }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-circle me-2"></i>Lưu thay đổi
                                </button>
                                <button type="reset" class="btn btn-secondary">
                                    <i class="bi bi-arrow-counterclockwise me-2"></i>Khôi phục
                                </button>
                                <a href="#" class="btn btn-danger">
                                    <i class="bi bi-trash me-2"></i>Xóa người dùng
                                </a>
                                <a href="#" class="btn btn-outline-secondary ms-auto">
                                    <i class="bi bi-arrow-left me-2"></i>Quay lại
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        <footer class="app-footer">
            <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">Anything you want</div>
            <!--end::To the end-->
            <!--begin::Copyright-->
            <strong>
                Copyright &copy; 2026&nbsp;
                <a href="#" class="text-decoration-none">Nguyễn Văn Huy</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer>
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3Q=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Required Plugin(popperjs for Bootstrap)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyou6FFsbQyIscEW5YZSrLDqldR8RVL0sflZWr/"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap)-->
    <!--begin::Required Plugin(Bootstrap js)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtNQ+menRNox2GHaafOMo3O73ZL+MRRN8sPZKAthzLSUvTccqCC+SpzBCC+I8/7"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap js)-->
    <!--begin::Required Plugin(AdminLTE js)-->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!--end::Required Plugin(AdminLTE js)-->
</body>
<!--end::Body-->

</html>
