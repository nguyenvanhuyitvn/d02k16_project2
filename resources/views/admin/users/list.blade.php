@extends('admin.layouts.app')
@section('title', 'User Management')
@section('name', 'Danh sách người dùng')
@section('breadcum')
    @parent
    <li class="breadcrumb-item"><a href="#">User</a></li>
    <li class="breadcrumb-item active">List</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-circle me-1"></i>Thêm mới
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Tìm kiếm theo tên hoặc email..." />
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">-- Chọn trạng thái --</option>
                            <option value="active">Hoạt động</option>
                            <option value="inactive">Vô hiệu hóa</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info w-100">
                            <i class="bi bi-search me-1"></i>Tìm kiếm
                        </button>
                    </div>
                    <div class="col-md-3 text-end">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-sm justify-content-end">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Vai trò</th>
                            <th>Thông tin</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th style="width: 80px">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="align-middle">
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                @if($user->role==1) 
                                    <span class="badge text-bg-danger">Quản trị viên</span>
                                @elseif($user->role==0)
                                    <span class="badge text-bg-primary">Khách hàng</span>
                                @else
                                    <span class="badge text-bg-warning">Người bán</span>
                                @endif
                            </td>
                            <td>
                                <div class="small text-muted"> {{$user->information}} </div>
                            </td>
                            <td>
                                @if($user->status==1) 
                                    <span class="badge text-bg-success">Hoạt động</span>
                                @else
                                    <span class="badge text-bg-danger">Vô hiệu hóa</span>
                                @endif
                            </td>
                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('admin.users.detail', $user->id) }}" class="btn btn-sm btn-info" title="Xem chi tiết"><i
                                            class="bi bi-eye"></i></a>
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary" title="Sửa"><i
                                            class="bi bi-pencil"></i></a>
                                    <a href="{{ route('admin.users.delete', $user->id) }}" class="btn btn-sm btn-danger" title="Hủy"><i
                                            class="bi bi-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
