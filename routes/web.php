<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FrontendController;

// Route untuk halaman welcome
Route::get('/', function () {
    return view('index');
});


Route::get('/', [CategoriesController::class, 'getCategories']); // Menampilkan kategori di halaman depan
Route::get('/{category}', [ProductsController::class, 'showCategory'])->name('category.show');


Route::get('/account/login', [LoginController::class, 'index'])->name('account.login');
Route::post('/account/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
Route::post('/account/logout', [LoginController::class, 'logout'])->name('account.logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/categories', [CategoriesController::class, 'index'])->name('admin.categories');
    Route::post('/admin/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::put('/admin/categories/{id_kategori}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id_kategori}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

    Route::get('/admin/products', [ProductsController::class, 'index'])->name('admin.products');
    Route::post('/admin/products/create', [ProductsController::class, 'store'])->name('products.store');
    Route::put('/admin/products/{id_produk}', [ProductsController::class, 'update'])->name('products.update');
    Route::delete('/products/{id_produk}', [ProductsController::class, 'destroy'])->name('products.destroy');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/admin/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
// Route::delete('/admin/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');


// // Route::post('/account/categories', [CategoriesController::class, 'submit'])->name('categories.submit');
// // Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
// // Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
// // Route untuk menghapus kategori


// Route::get('account/products/create-product', [ProductsController::class, 'create'])->name('create-product');



