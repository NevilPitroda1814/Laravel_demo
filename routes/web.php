<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/product',ProductController::class);
Route::resource('/category',CategoryController::class);

Route::post('/create_product',[ProductController::class,'store'])->name('create_product');
Route::post('/create_category',[CategoryController::class,'store'])->name('create_category');

Route::delete('/delete_product/{id}',[ProductController::class,'destroy'])->name('delete_product');
Route::delete('/delete_category/{id}',[CategoryController::class,'destroy'])->name('delete_category');