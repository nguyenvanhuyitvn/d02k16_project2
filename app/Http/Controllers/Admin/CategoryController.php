<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class CategoryController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return [
            // Kiểm tra đăng nhập cho tất cả các phương thức của CategoryController
            new Middleware('admin.checklogin'),
            // Kiểm tra role cho các phương thức của CategoryController - admin có quyền truy cập tất cả các phương thức, 
            // staff chỉ có quyền truy cập index, detail, search
            new Middleware('role:admin', except: ['index', 'detail', 'search']),
            // Kiểm tra role cho các phương thức của CategoryController - staff chỉ có quyền truy cập index, detail, search
            new Middleware('role:admin,staff', only: ['index', 'detail', 'search']),
        ];
    }
    //Lấy danh sách các danh mục
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.list', compact('categories'));
    }

    //Hiển thị chi tiết danh mục

    public function detail($id) {
        $category = Category::findOrFail($id);
        return view('admin.categories.detail', compact('category'));
    }

    //Hiển thị giao diện tạo mới danh mục (form tạo mới)
    public function create()
    {
        return view('admin.categories.create');
    }
    
    //Lưu danh mục được tạo mới (Xử lý form tạo mới)
    public function store(Request $request) {
        $data = $request->validate(
            [
                'name' => 'required|max:255',
                'status' => 'required|in:0,1',
                'description' => 'nullable|string',
            ],
            [
                'name.required' => 'Tên danh mục không được để trống',
                'name.max' => 'Tên danh mục quá dài',
                'status.required' => 'Trạng thái danh mục không được để trống',
                'status.in' => 'Trạng thái không hợp lệ',
            ]
        );
        
        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Thêm danh mục thành công');
    }

    //Hiển thị giao diện sửa danh mục (form sửa danh mục theo id)
    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    //Cập nhật thông tin danh mục được sửa (Xử lý lưu danh mục)
    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);

        $data = $request->validate(
            [
                'name' => 'required|max:255',
                'status' => 'required|in:0,1',
                'description' => 'nullable|string',
            ],
            [
                'name.required' => 'Tên danh mục không được để trống',
                'name.max' => 'Tên danh mục quá dài',
                'status.required' => 'Trạng thái danh mục không được để trống',
                'status.in' => 'Trạng thái không hợp lệ',
            ]
        );

        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Cập nhật danh mục thành công');
    }

    //Xóa danh mục
    public function delete($id) {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Xóa danh mục thành công');
    }

    //Lọc
    public function search(Request $request) {
        $query = Category::orderBy('id', 'desc');

        if ($request->filled('q')) {
            $query->where('name', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('status') && in_array($request->status, ['0', '1'], true)) {
            $query->where('status', $request->status);
        }

        $categories = $query->get();

        return view('admin.categories.list', compact('categories'));
    }
}

