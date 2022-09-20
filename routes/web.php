<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('store',[ProductController::class,'store'])->name('store');


Route::get('products/create',[ProductController::class,'create'])->name('products.create');



Route::get('products/index',[ProductController::class,'index'])->name('products.index');

Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::get('products/detail/{id}',[ProductController::class,'detail'])->name('products.detail');

Route::post('update/{id}',[ProductController::class,'update'])->name('update');



Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');


// orders
Route::get('orders/index',[OrderController::class,'index'])->name('orders.index');
Route::get('orders/confirm/{id}',[OrderController::class,'confirm'])->name('orders.confirm');
Route::get('orders/pending/{id}',[OrderController::class,'pending'])->name('orders.pending');
Route::get('orders/detail/{id}',[OrderController::class,'detail'])->name('orders.detail');

// user


