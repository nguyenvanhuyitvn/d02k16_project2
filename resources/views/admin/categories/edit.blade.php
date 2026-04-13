@extends('admin.layouts.app')
@section('title', 'Category Management')
@section('name', 'Chỉnh sửa danh mục')
@section('breadcum')
    @parent
    <li class="breadcrumb-item"><a href="#">Categories</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thông tin danh mục</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên danh mục</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $category->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="">-- Chọn trạng thái --</option>
                            <option value="1" {{ old('status', $category->status) == '1' ? 'selected' : '' }}>Hoạt động</option>
                            <option value="0" {{ old('status', $category->status) == '0' ? 'selected' : '' }}>Vô hiệu hóa</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Lưu</button>
                        <a href="#" class="btn btn-secondary">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
