@extends('admin.layouts.app')
@section('title', 'Product Management')
@section('name', 'Sửa sản phẩm')
@section('breadcum')
    @parent
    <li class="breadcrumb-item"><a href="#">Products</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thông tin sản phẩm</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" placeholder="Nhập tên sản phẩm">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Danh mục</label>
                        <select name="category_id" id="category_id" class="form-select">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Ảnh sản phẩm</label>
                        <input type="file" name="thumbnail" id="thumbnail" class="form-control" accept="image/*">
                        @if($product->thumbnail)
                            <div class="mt-2">
                                <img src="{{ Storage::url($product->thumbnail) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 180px;">
                            </div>
                        @endif
                        @error('thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}" placeholder="Nhập giá sản phẩm">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Số lượng</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity', $product->quantity) }}" placeholder="Nhập số lượng">
                        @error('quantity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea name="description" id="description" class="form-control" rows="4" placeholder="Nhập mô tả">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Cập nhật</button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
