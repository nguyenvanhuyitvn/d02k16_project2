@extends('admin.layouts.app')
@section('title', 'Product Management')
@section('name', 'Chi tiết sản phẩm')
@section('breadcum')
    @parent
    <li class="breadcrumb-item"><a href="#">Products</a></li>
    <li class="breadcrumb-item active">Detail</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="card-title">Thông tin chi tiết sản phẩm</h3>
                </div>
                <div>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-pencil"></i> Sửa
                    </a>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary btn-sm">
                        <i class="bi bi-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        @if($product->thumbnail)
                            <img src="{{ Storage::url($product->thumbnail) }}" alt="{{ $product->name }}" class="img-fluid rounded mb-3">
                        @else
                            <div class="border rounded p-4 text-center text-muted">Không có ảnh</div>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <th>Tên sản phẩm</th>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <th>Danh mục</th>
                                <td>{{ $product->category->name ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Giá</th>
                                <td>{{ number_format($product->price, 0, ',', '.') }}<sup>đ</sup></td>
                            </tr>
                            <tr>
                                <th>Số lượng</th>
                                <td>{{ $product->quantity }}</td>
                            </tr>
                            <tr>
                                <th>Mô tả</th>
                                <td>{{ $product->description ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Ngày tạo</th>
                                <td>{{ $product->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Cập nhật</th>
                                <td>{{ $product->updated_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
