<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chi tiết đơn hàng - Admin</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Chi tiết đơn hàng" />
    <meta name="author" content="Nguyễn Văn Huy" />
    <meta name="description" content="Trang chi tiết đơn hàng" />
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
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-seam-fill"></i>
                                <p>
                                    Người dùng
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
                        <li class="nav-item menu-open">
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
                            <h3 class="mb-0">Chi tiết đơn hàng #DH-001</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
                                <li class="breadcrumb-item active">Chi tiết</li>
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
                        <!-- Thông tin đơn hàng -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin đơn hàng</h3>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Mã đơn hàng:</label>
                                        <p>#DH-001</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Ngày tạo:</label>
                                        <p>09/02/2026 14:30</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Trạng thái:</label>
                                        <p><span class="badge text-bg-success">Hoàn thành</span></p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Hình thức thanh toán:</label>
                                        <p>Thanh toán khi nhận hàng (COD)</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Ngày giao hàng:</label>
                                        <p>10/02/2026</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thông tin khách hàng và địa chỉ -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin giao hàng</h3>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Người nhận:</label>
                                        <p>Nguyễn Văn A</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Số điện thoại:</label>
                                        <p>0912345678</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Email:</label>
                                        <p>nguyenvana@example.com</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Địa chỉ:</label>
                                        <p>123 Nguyễn Huệ, Quận 1, TP.HCM, Việt Nam</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Ghi chú:</label>
                                        <p>Giao hàng vào giờ hành chính, đặt trước cửa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chi tiết sản phẩm -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Chi tiết sản phẩm</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Sản phẩm</th>
                                                <th>SKU</th>
                                                <th>Giá đơn vị</th>
                                                <th>Số lượng</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Laptop Dell XPS 13</td>
                                                <td>DELL-XPS-13</td>
                                                <td>20,000,000 ₫</td>
                                                <td>
                                                    <div class="input-group input-group-sm" style="width: 80px;">
                                                        <input type="number" class="form-control" value="1" />
                                                    </div>
                                                </td>
                                                <td>20,000,000 ₫</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Chuột không dây Logitech</td>
                                                <td>LOG-MOUSE-001</td>
                                                <td>500,000 ₫</td>
                                                <td>
                                                    <div class="input-group input-group-sm" style="width: 80px;">
                                                        <input type="number" class="form-control" value="2" />
                                                    </div>
                                                </td>
                                                <td>1,000,000 ₫</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Bàn phím cơ Corsair K70</td>
                                                <td>COR-KB-K70</td>
                                                <td>3,500,000 ₫</td>
                                                <td>
                                                    <div class="input-group input-group-sm" style="width: 80px;">
                                                        <input type="number" class="form-control" value="1" />
                                                    </div>
                                                </td>
                                                <td>3,500,000 ₫</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="5" class="text-end fw-bold">Tổng tiền hàng:</td>
                                                <td class="fw-bold">24,500,000 ₫</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-end fw-bold">Phí vận chuyển:</td>
                                                <td class="fw-bold">250,000 ₫</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-end fw-bold">Thuế VAT (10%):</td>
                                                <td class="fw-bold">2,475,000 ₫</td>
                                            </tr>
                                            <tr style="background-color: #f8f9fa; border-top: 2px solid #dee2e6;">
                                                <td colspan="5" class="text-end fw-bold fs-5">Tổng cộng:</td>
                                                <td class="fw-bold fs-5" style="color: #dc3545;">27,225,000 ₫</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Thao tác -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Thao tác</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-primary">
                                            <i class="bi bi-pencil me-2"></i>Chỉnh sửa
                                        </a>
                                        <a href="#" class="btn btn-info">
                                            <i class="bi bi-printer me-2"></i>In hóa đơn
                                        </a>
                                        <a href="#" class="btn btn-success">
                                            <i class="bi bi-check-circle me-2"></i>Xác nhận giao hàng
                                        </a>
                                        <a href="#" class="btn btn-warning">
                                            <i class="bi bi-arrow-clockwise me-2"></i>Hoàn trả
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <i class="bi bi-trash me-2"></i>Hủy đơn
                                        </a>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="bi bi-arrow-left me-2"></i>Quay lại
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lịch sử đơn hàng -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Lịch sử đơn hàng</h3>
                                </div>
                                <div class="card-body">
                                    <div class="timeline">
                                        <div class="time-label">
                                            <span class="bg-danger">09 Tháng 2 2026</span>
                                        </div>
                                        <div>
                                            <i class="bi bi-circle-fill text-primary"></i>
                                            <div class="timeline-item">
                                                <h3 class="timeline-header">Đơn hàng được tạo</h3>
                                                <div class="timeline-body">
                                                    Nguyễn Văn A đã tạo một đơn hàng mới
                                                </div>
                                                <div class="timeline-footer">
                                                    09/02/2026 14:30
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="bi bi-circle-fill text-success"></i>
                                            <div class="timeline-item">
                                                <h3 class="timeline-header">Đơn hàng được xác nhận</h3>
                                                <div class="timeline-body">
                                                    Quản trị viên đã xác nhận đơn hàng
                                                </div>
                                                <div class="timeline-footer">
                                                    09/02/2026 15:45
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="bi bi-circle-fill text-info"></i>
                                            <div class="timeline-item">
                                                <h3 class="timeline-header">Đơn hàng được đóng gói</h3>
                                                <div class="timeline-body">
                                                    Sản phẩm đã được đóng gói và chuẩn bị gửi
                                                </div>
                                                <div class="timeline-footer">
                                                    09/02/2026 17:20
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="bi bi-circle-fill text-warning"></i>
                                            <div class="timeline-item">
                                                <h3 class="timeline-header">Đơn hàng đang được giao</h3>
                                                <div class="timeline-body">
                                                    Đơn hàng đã được nhân viên giao hàng nhận
                                                </div>
                                                <div class="timeline-footer">
                                                    10/02/2026 08:00
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="bi bi-circle-fill text-success"></i>
                                            <div class="timeline-item">
                                                <h3 class="timeline-header">Đơn hàng đã giao thành công</h3>
                                                <div class="timeline-body">
                                                    Khách hàng đã nhận hàng và xác nhận
                                                </div>
                                                <div class="timeline-footer">
                                                    10/02/2026 14:15
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
