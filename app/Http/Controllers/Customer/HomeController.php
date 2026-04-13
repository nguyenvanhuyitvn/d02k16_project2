<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    // Hiển thị trang chủ khách hàng - danh sách danh mục và sản phẩm
    public function index()
    {
        $categories = Category::where('status', 1)->get();
        $products = Product::where('quantity', '>', 0)->get();
        
        return view('customers.home', compact('categories', 'products'));
    }

    // Hiển thị sản phẩm theo danh mục
    public function category($id)
    {
        $category = Category::with('products')->where('status', 1)->findOrFail($id);
        $categories = Category::where('status', 1)->get();
        $products = Product::where('category_id', $id)->where('quantity', '>', 0)->get();
        
        return view('customers.category', compact('category', 'categories', 'products'));
    }

    // Hiển thị chi tiết sản phẩm
    public function productDetail($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('status', 1)->get();
        $relatedProducts = Product::where('category_id', $product->category_id)
                                    ->where('id', '!=', $id)
                                    ->where('quantity', '>', 0)
                                    ->limit(4)
                                    ->get();
        
        return view('customers.product-detail', compact('product', 'relatedProducts','categories'));
    }
}
