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
                    <span class="brand-text fw-light">Mobile Shop</span>
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
                                    <a href="{{route('admin.users.index')}}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.users.create')}}" class="nav-link">
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
                                    <a href="{{route('admin.categories.index')}}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.categories.create')}}" class="nav-link">
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
                                    <span class="nav-badge badge text-bg-secondary me-3">6</span>
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.products.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.products.create') }}" class="nav-link">
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
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.orders.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Đang chờ duyệt</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Đang vận chuyển</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Đã hoàn thành</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Đã hủy</p>
                                    </a>
                                </li>
                            </ul>
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