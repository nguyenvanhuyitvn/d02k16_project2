@extends('admin.layouts.app')
@section('title', 'Product Management')
@section('name', 'Quản lý sản phẩm')
@section('breadcum')
    @parent
    <li class="breadcrumb-item"><a href="#">Products</a></li>
    <li class="breadcrumb-item active">List</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('admin.products.create')}}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-circle me-1"></i>Thêm mới
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Tìm kiếm theo tên sản phẩm..." />
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($products as $product)
                                @if($product->category)
                                    <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                                @endif
                            @endforeach
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
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Mô tả</th>
                            <th style="width: 100px">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr class="align-middle">
                                <td>{{$product->id}}.</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->name ?? 'N/A'}}</td>
                                <td>{{number_format($product->price, 0, ',', '.')}}<sup>đ</sup></td>
                                <td>
                                    @if($product->quantity > 10)
                                        <span class="badge text-bg-success">{{$product->quantity}}</span>
                                    @elseif($product->quantity > 0)
                                        <span class="badge text-bg-warning">{{$product->quantity}}</span>
                                    @else
                                        <span class="badge text-bg-danger">Hết hàng</span>
                                    @endif
                                </td>
                                <td>{{Str::limit($product->description, 30)}}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{route('admin.products.detail', $product->id)}}" class="btn btn-sm btn-info" title="Xem chi tiết"><i class="bi bi-eye"></i></a>
                                        <a href="{{route('admin.products.edit', $product->id)}}" class="btn btn-sm btn-primary" title="Sửa"><i class="bi bi-pencil"></i></a>
                                        <a href="{{route('admin.products.delete', $product->id)}}" class="btn btn-sm btn-danger" title="Xóa" onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    <i class="bi bi-inbox"></i> Không có sản phẩm nào
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
