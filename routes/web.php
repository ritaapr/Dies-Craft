<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

// Route untuk halaman welcome
Route::get('/', function () {
    return view('index');
});

Route::get('/account/login', [LoginController::class, 'index'])->name('account.login');
Route::post('/account/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
Route::post('/account/logout', [LoginController::class, 'logout'])->name('account.logout');

Route::get('/account/dashboard', [DashboardController::class, 'index'])
->name('account.dashboard')
->middleware('auth');