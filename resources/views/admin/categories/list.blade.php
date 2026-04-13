@extends('admin.layouts.app')
@section('title', 'Category Management')
@section('name', 'Danh sách danh mục')
@section('breadcum')
    @parent
    <li class="breadcrumb-item"><a href="#">Categories</a></li>
    <li class="breadcrumb-item active">List</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('admin.categories.create')}}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-circle me-1"></i>Thêm mới
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('admin.categories.search') }}" method="GET">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" name="q" class="form-control" value="{{ request('q') }}" placeholder="Tìm kiếm theo tên danh mục..." />
                        </div>
                        <div class="col-md-3">
                            <select name="status" class="form-select">
                                <option value="">-- Chọn trạng thái --</option>
                                <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Hoạt động</option>
                                <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Vô hiệu hóa</option>
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
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th style="width: 80px">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $cat )
                   
                        <tr class="align-middle">
                            <td>{{$cat->id}}.</td>
                            <td>{{$cat->name}}</td>
                            <td>{{$cat->description}}</td>
                            <td>
                                @if($cat->status == 1)
                                    <span class="badge text-bg-success">Hoạt động</span>
                                @else
                                    <span class="badge text-bg-danger">Vô hiệu hóa</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{route('admin.categories.detail',$cat->id)}}" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                    <a href="{{route('admin.categories.edit', $cat->id)}}" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                    <a href="{{route('admin.categories.delete', $cat->id)}}" class="btn btn-sm btn-danger" title="Xóa"><i class="bi bi-trash"></i></a>
                                </div>
                            </td>
                        </tr>

                     @endforeach
                        <!-- more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
