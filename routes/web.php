<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

// ROUTE LOGIN..
Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('login.logout');

// ROUTE TANPA BUAT CONTROLLER
// Route::get('logout', function () {
//     Auth::logout();
//     return redirect()->to('login');
// })->name('logout');

Route::middleware(['checkLevel:3'])->group(function () {
    Route::resource( 'penjualan', \App\Http\Controllers\TransactionController::class);
});
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::resource('product', \App\Http\Controllers\ProductController::class);
Route::resource('levels', \App\Http\Controllers\LevelsController::class);
Route::get('get-products/{category_id}', [\App\Http\Controllers\TransactionController::class, 'getProducts']);
Route::get('get-product/{product_id}', [\App\Http\Controllers\TransactionController::class, 'getProduct']);
Route::get('print/{id}', [\App\Http\Controllers\TransactionController::class, 'print']);
