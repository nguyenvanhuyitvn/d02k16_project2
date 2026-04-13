<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Đơn hàng - Admin</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Đơn hàng" />
    <meta name="author" content="Nguyễn Văn Huy" />
    <meta name="description" content="Trang quản lý đơn hàng" />
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
                    <!--begin::Messages Dropdown Menu-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#">
                            <i class="bi bi-chat-text"></i>
                            <span class="navbar-badge badge text-bg-danger">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('dist/assets/img/user1-128x128.jpg') }}" alt="User Avatar"
                                            class="img-size-50 rounded-circle me-3" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-end fs-7 text-danger"><i
                                                    class="bi bi-star-fill"></i></span>
                                        </h3>
                                        <p class="fs-7">Call me whenever you can...</p>
                                        <p class="fs-7 text-secondary">
                                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div>
                                <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('dist/assets/img/user8-128x128.jpg') }}" alt="User Avatar"
                                            class="img-size-50 rounded-circle me-3" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-end fs-7 text-secondary">
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                        </h3>
                                        <p class="fs-7">I got your message bro</p>
                                        <p class="fs-7 text-secondary">
                                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div>
                                <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!--begin::Message-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('dist/assets/img/user3-128x128.jpg') }}" alt="User Avatar"
                                            class="img-size-50 rounded-circle me-3" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-end fs-7 text-warning">
                                                <i class="bi bi-star-fill"></i>
                                            </span>
                                        </h3>
                                        <p class="fs-7">The subject goes here</p>
                                        <p class="fs-7 text-secondary">
                                            <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                        </p>
                                    </div>
                                </div>
                                <!--end::Message-->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!--end::Messages Dropdown Menu-->
                    <!--begin::Notifications Dropdown Menu-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#">
                            <i class="bi bi-bell-fill"></i>
                            <span class="navbar-badge badge text-bg-warning">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="bi bi-envelope me-2"></i> 4 new messages
                                <span class="float-end text-secondary fs-7">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="bi bi-people-fill me-2"></i> 8 friend requests
                                <span class="float-end text-secondary fs-7">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                                <span class="float-end text-secondary fs-7">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                        </div>
                    </li>
                    <!--end::Notifications Dropdown Menu-->
                    <!--begin::Fullscreen Toggle-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                        </a>
                    </li>
                    <!--end::Fullscreen Toggle-->
                    <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('dist/assets/img/user2-160x160.jpg') }}"
                                class="user-image rounded-circle shadow" alt="User Image" />
                            <span class="d-none d-md-inline">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <!--begin::User Image-->
                            <li class="user-header text-bg-primary">
                                <img src="{{ asset('dist/assets/img/user2-160x160.jpg') }}"
                                    class="rounded-circle shadow" alt="User Image" />
                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2023</small>
                                </p>
                            </li>
                            <!--end::User Image-->
                            <!--begin::Menu Body-->
                            <li class="user-body">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-4 text-center"><a href="#">Followers</a></div>
                                    <div class="col-4 text-center"><a href="#">Sales</a></div>
                                    <div class="col-4 text-center"><a href="#">Friends</a></div>
                                </div>
                                <!--end::Row-->
                            </li>
                            <!--end::Menu Body-->
                            <!--begin::Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                            </li>
                            <!--end::Menu Footer-->
                        </ul>
                    </li>
                    <!--end::User Menu Dropdown-->
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
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
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
                                            <a href="./examples/login.html" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>Doanh thu theo tháng</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./examples/register.html" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>Doanh thu theo quý</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./examples/register.html" class="nav-link">
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
                                            <a href="./examples/login-v2.html" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>Sản phẩm bán chạy</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./examples/register-v2.html" class="nav-link">
                                                <i class="nav-icon bi bi-circle"></i>
                                                <p>Sản phẩm bán kém</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="./examples/lockscreen.html" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Tồn kho</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">CÀI ĐẶT</li>
                        <li class="nav-item">
                            <a href="./docs/introduction.html" class="nav-link">
                                <i class="nav-icon bi bi-download"></i>
                                <p>Thông tin chung</p>
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
                            <h3 class="mb-0">Đơn hàng</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
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
                    <!--begin::Row-->
                    <div class="row">
                        <!--BEGIN::CONTENT-->
                        <div class="col-md-12 col-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Danh sách đơn hàng</h3>
                                    <div class="card-tools">
                                        <ul class="pagination pagination-sm float-end">
                                            <li class="page-item"><a class="page-link" href="#">&laquo;</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">&raquo;</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body border-bottom py-3">
                                    <form method="GET" action="{{ url()->current() }}" class="row g-2 align-items-center">
                                        <div class="col-md-3">
                                            <label class="form-label visually-hidden" for="status">Trạng thái</label>
                                            <select id="status" name="status" class="form-select">
                                                <option value="" {{ request('status') == '' ? 'selected' : '' }}>Tất cả trạng thái</option>
                                                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Chờ xử lý</option>
                                                <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Đang xử lý</option>
                                                <option value="shipping" {{ request('status') == 'shipping' ? 'selected' : '' }}>Đang giao</option>
                                                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Hoàn thành</option>
                                                <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Bị huỷ</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label visually-hidden" for="q">Người nhận</label>
                                            <input type="search" id="q" name="q" class="form-control" placeholder="Tìm theo người nhận hoặc số điện thoại" value="{{ request('q') }}">
                                        </div>

                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}" aria-label="Từ ngày">
                                                <span class="input-group-text">—</span>
                                                <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}" aria-label="Đến ngày">
                                            </div>
                                        </div>

                                        <div class="col-md-2 text-end">
                                            <div class="d-flex justify-content-end gap-2">
                                                <button type="submit" class="btn btn-primary">Lọc</button>
                                                <a href="{{ url()->current() }}" class="btn btn-outline-secondary">Xóa</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Người nhận</th>
                                                <th>Số điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Tổng tiền</th>
                                                <th>Trạng thái</th>
                                                <th style="width: 40px">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <td>1.</td>
                                                <td>Nguyễn Văn A</td>
                                                <td>0912345678</td>
                                                <td>123 Nguyễn Huệ, Quận 1, TP.HCM</td>
                                                <td>1,250,000 ₫</td>
                                                <td><span class="badge text-bg-success">Hoàn thành</span></td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>2.</td>
                                                <td>Trần Thị B</td>
                                                <td>0923456789</td>
                                                <td>456 Lê Lợi, Quận 10, TP.HCM</td>
                                                <td>850,000 ₫</td>
                                                <td><span class="badge text-bg-warning">Chờ xử lý</span></td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>3.</td>
                                                <td>Lê Văn C</td>
                                                <td>0934567890</td>
                                                <td>789 Võ Văn Kiệt, Quận 5, TP.HCM</td>
                                                <td>2,100,000 ₫</td>
                                                <td><span class="badge text-bg-info">Đang giao</span></td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>4.</td>
                                                <td>Phạm Minh D</td>
                                                <td>0945678901</td>
                                                <td>321 Cách Mạng Tháng 8, Quận 3, TP.HCM</td>
                                                <td>675,500 ₫</td>
                                                <td><span class="badge text-bg-success">Hoàn thành</span></td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>5.</td>
                                                <td>Hoàng Thanh E</td>
                                                <td>0956789012</td>
                                                <td>654 Nguyễn Thái Học, Quận 1, TP.HCM</td>
                                                <td>1,890,000 ₫</td>
                                                <td><span class="badge text-bg-danger">Bị huỷ</span></td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>6.</td>
                                                <td>Vương Thúy F</td>
                                                <td>0967890123</td>
                                                <td>987 Nguyễn Hữu Cảnh, Quận Bình Thạnh, TP.HCM</td>
                                                <td>3,200,000 ₫</td>
                                                <td><span class="badge text-bg-success">Hoàn thành</span></td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>7.</td>
                                                <td>Ngô Quang G</td>
                                                <td>0978901234</td>
                                                <td>246 Lý Tự Trọng, Quận 1, TP.HCM</td>
                                                <td>950,000 ₫</td>
                                                <td><span class="badge text-bg-warning">Chờ xử lý</span></td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>8.</td>
                                                <td>Dương Như H</td>
                                                <td>0989012345</td>
                                                <td>135 Trần Hưng Đạo, Quận 1, TP.HCM</td>
                                                <td>1,450,000 ₫</td>
                                                <td><span class="badge text-bg-info">Đang giao</span></td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>9.</td>
                                                <td>Bùi Minh I</td>
                                                <td>0901234567</td>
                                                <td>579 Bà Huyện Thanh Quan, Quận 3, TP.HCM</td>
                                                <td>2,750,000 ₫</td>
                                                <td><span class="badge text-bg-success">Hoàn thành</span></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>10.</td>
                                                <td>Cao Thị K</td>
                                                <td>0912398765</td>
                                                <td>802 Điện Biên Phủ, Quận Bình Thạnh, TP.HCM</td>
                                                <td>1,080,000 ₫</td>
                                                <td><span class="badge text-bg-warning">Chờ xử lý</span></td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <a href="#" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                                        <a href="#" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                                        <a href="#" class="btn btn-sm btn-danger" title="Hủy"><i class="bi bi-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!--END::CONTENT-->
                    </div>
                    <!--end::Row-->
                    <!-- /.row (main row) -->
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
        integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
        integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>
    <!-- sortablejs -->
    <script>
        const connectedSortables = document.querySelectorAll('.connectedSortable');
        connectedSortables.forEach((connectedSortable) => {
            let sortable = new Sortable(connectedSortable, {
                group: 'shared',
                handle: '.card-header',
            });
        });

        const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = 'move';
        });
    </script>
</body>
<!--end::Body-->

</html>
