<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Membuat Route Yang Mengarah Ke Page Login
Route::get('/', [App\Http\Controllers\LoginController::class, 'index']);

Route::get('login', [LoginController::class, 'index']);

// Membuat Dashboard
Route::resource('dashboard', App\Http\Controllers\DashboardController::class);

// Dashboard
Route::get('dashboard.index', [App\Http\Controllers\DashboardController::class, 'index']);

// Masuk ke Dashboard
Route::post('action-login', [App\Http\Controllers\LoginController::class, 'actionLogin'])->name('function-login');

// Untuk User
Route::resource('user', App\Http\Controllers\UserController::class);


// Untuk Kategory
Route::resource('category', App\Http\Controllers\CategoryController::class);

Route::resource('product', App\Http\Controllers\ProductController::class);


// Untuk Transaksi
Route::resource('penjualan', App\Http\Controllers\TransactionController::class);

Route::get('get-products/{category_id}', [App\Http\Controllers\TransactionController::class, 'getProducts']);
Route::get('get-product/{product_id}', [App\Http\Controllers\TransactionController::class, 'getProduct']);
Route::get('print/{id}', [App\Http\Controllers\TransactionController::class, 'print'])->name('print');
      