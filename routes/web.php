<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\CartController;
use Illuminate\Support\Facades\Route;
//http://127.0.0.1:8000/
Route::get('/', [HomeController::class, 'index'])->name('customer.home');


//Trang quản trị
Route::prefix('admin')->group(function () {
    Route::middleware('admin.checklogout')->group(function () {
        Route::get('/login', [LoginController::class, 'login'])->name('login');
        Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::middleware('admin.checklogin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('admin.users.index'); //URL: .../admin/users
            Route::get('/{id}', [UserController::class, 'detail'])->where('id', '[0-9]+')->name('admin.users.detail'); //URL: .../admin/users/1
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
            Route::post('/{id}/update', [UserController::class, 'update'])->name('admin.users.update');
            Route::get('/create', [UserController::class, 'create'])->name('admin.users.create');
            Route::post('/store', [UserController::class, 'store'])->name('admin.users.store');
            Route::get('/{id}/delete', [UserController::class, 'delete'])->name('admin.users.delete');
        });
        Route::prefix('orders')->group(function () {
            //orders
            Route::get('/', [OrderController::class, 'index'])->name('admin.orders.index');
            //orders/1
            Route::get('/{id}', [OrderController::class, 'show'])->where('id', '[0-9]+')->name('admin.orders.detail');
        });

        Route::prefix('categories')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('admin.categories.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
            Route::get('/search', [CategoryController::class, 'search'])->name('admin.categories.search');
            Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
            Route::post('/{id}/update', [CategoryController::class, 'update'])->name('admin.categories.update');
            Route::get('/{id}/delete', [CategoryController::class, 'delete'])->name('admin.categories.delete');
            Route::get('/{id}', [CategoryController::class, 'detail'])->where('id', '[0-9]+')->name('admin.categories.detail');
        });
        Route::prefix('products')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
            Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
            Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
            Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
            Route::post('/{id}/update', [ProductController::class, 'update'])->name('admin.products.update');
            Route::get('/{id}/delete', [ProductController::class, 'delete'])->name('admin.products.delete');
            Route::get('/{id}', [ProductController::class, 'detail'])->where('id', '[0-9]+')->name('admin.products.detail');
        });
        Route::prefix('customers')->group(function () {
            Route::get('/', [CustomerController::class, 'index'])->name('admin.customer.index');
            Route::get('/{id}', [CustomerController::class, 'detail'])->name('admin.customer.detail');
            Route::get('/create', [CustomerController::class, 'create'])->name('admin.customer.create');
            Route::get('/store', [CustomerController::class, 'store'])->name('admin.customer.store');
            Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('admin.customer.edit');
            Route::get('/{id}/update', [CustomerController::class, 'update'])->name('admin.customer.update');
            Route::get('/{id}/delete', [CustomerController::class, 'delete'])->name('admin.customer.delete');
        });
    });
});

//Trang khác hàng
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('customer.home');
    Route::get('/category/{id}', [HomeController::class, 'category'])->where('id', '[0-9]+')->name('customer.category');
    Route::get('/product/{id}', [HomeController::class, 'productDetail'])->where('id', '[0-9]+')->name('customer.product-detail');
    Route::get('/cart', [CartController::class, 'index'])->name('customer.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('customer.cart.add');
    Route::post('/cart/update', [CartController::class, 'update'])->name('customer.cart.update');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('customer.cart.remove');
    Route::get('/checkout', [CartController::class, 'checkoutPage'])->name('customer.checkout');
    Route::post('/cart/prepare-checkout', [CartController::class, 'prepareCheckout'])->name('customer.cart.prepareCheckout');
    Route::post('/cart/apply-discount', [CartController::class, 'applyDiscount'])->name('customer.cart.applyDiscount');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('customer.cart.checkout');
});
