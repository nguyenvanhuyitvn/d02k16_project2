@extends('admin.layouts.app')
@section('title', 'Category Management')
@section('name', 'Chi tiết danh mục')
@section('breadcum')
    @parent
    <li class="breadcrumb-item"><a href="#">Categories</a></li>
    <li class="breadcrumb-item active">Detail</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Thông tin danh mục</h3>
                <div>
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-pencil"></i> Sửa
                    </a>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary btn-sm">
                        <i class="bi bi-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Tên danh mục</label>
                        <p>{{ $category->name }}</p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Trạng thái</label>
                        <p>
                            @if($category->status == 1)
                                <span class="badge text-bg-success">Hoạt động</span>
                            @else
                                <span class="badge text-bg-danger">Vô hiệu hóa</span>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Mô tả</label>
                    <p>{{ $category->description ?? '-' }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Ngày tạo</label>
                        <p>{{ $category->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Cập nhật lần cuối</label>
                        <p>{{ $category->updated_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
