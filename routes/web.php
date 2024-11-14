<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin.login');