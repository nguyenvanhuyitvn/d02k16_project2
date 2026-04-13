@extends('admin.layouts.app')
@section('title', 'Quản lý người dùng')
@section('name', 'Tạo mới tài khoản')
@section('breadcum')
    @parent
    <li class="breadcrumb-item"><a href="#">Users</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
           <form action="{{ route('admin.users.store') ?? '#' }}" method="POST" enctype="multipart/form-data">
                        @csrf

            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header"><h3 class="card-title">Thông tin cá nhân</h3></div>
                                <div class="card-body">
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nhập họ và tên" value="{{ old('fullname') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email" value="{{ old('email') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Nhập số điện thoại" value="{{ old('phone') }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address" class="form-label">Địa chỉ</label>
                                            <input type="text" name="address" class="form-control" id="address" placeholder="Nhập địa chỉ" value="{{ old('address') }}">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6"><div class="mb-3"><label for="city" class="form-label">Thành phố</label><input type="text" name="city" class="form-control" id="city" value="{{ old('city') }}"></div></div>
                                            <div class="col-md-6"><div class="mb-3"><label for="district" class="form-label">Quận/Huyện</label><input type="text" name="district" class="form-control" id="district" value="{{ old('district') }}"></div></div>
                                        </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header"><h3 class="card-title">Thông tin tài khoản</h3></div>
                                <div class="card-body">
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Vai trò <span class="text-danger">*</span></label>
                                            <select class="form-select" id="role" name="role" required>
                                                <option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Khách hàng</option>
                                                <option value="seller" {{ old('role') == 'seller' ? 'selected' : '' }}>Người bán</option>
                                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Quản trị viên</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="status" class="form-label">Trạng thái <span class="text-danger">*</span></label>
                                            <select class="form-select" id="status" name="status" required>
                                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Hoạt động</option>
                                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Vô hiệu hóa</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header"><h3 class="card-title">Ảnh đại diện</h3></div>
                                <div class="card-body text-center">
                                    <img src="https://via.placeholder.com/200x200" alt="Avatar" class="img-fluid rounded-circle mb-3" width="150">
                                    <div class="mb-3"><input type="file" name="avatar" class="form-control" accept="image/*"></div>
                                    <small class="text-muted">Chọn ảnh JPG, PNG hoặc GIF (Tối đa 2MB)</small>
                                </div>
                            </div>

                            <!-- 'Thông tin khác' card removed for create view -->
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle me-2"></i>Tạo người dùng</button>
                                <button type="reset" class="btn btn-secondary"><i class="bi bi-arrow-counterclockwise me-2"></i>Khôi phục</button>
                                <a href="{{ route('admin.users.index') ?? '#' }}" class="btn btn-outline-secondary ms-auto"><i class="bi bi-arrow-left me-2"></i>Quay lại</a>
                            </div>
                        </div>
                    </div>

                    </form>

                </div>
            </div>
        </main>




    @endsection