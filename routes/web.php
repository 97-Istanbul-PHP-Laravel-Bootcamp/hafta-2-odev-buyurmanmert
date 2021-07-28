<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\CartController;
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


//Kategori Yönetimi
Route::get('/admin/category/index',[CategoryController::class,'index'])->name('categoryList'); //Kategori Listeleme => /admin/category/index
//Route::get('/admin/category',[CategoryController::class,'create'])->name('category');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('categoryAdd'); //Kategori Ekleme  => /admin/category/create
Route::get('/admin/category/edit',[CategoryController::class,'edit'])->name('categoryEdit'); //Kategori Düzenleme => /admin/category/edit

//Ürün Yönetimi
Route::get('/admin/product/index',[ProductController::class,'index'])->name('productList'); //Ürün Listeleme => /admin/product/index
Route::get('/admin/product/create',[ProductController::class,'create'])->name('productAdd'); //Ürün Ekleme  => /admin/product/create
Route::get('/admin/product/edit',[ProductController::class,'edit'])->name('productEdit'); //Ürün Düzenleme => /admin/category/edit

//Kullanıcı Yönetimi
Route::get('/admin/user/index',[UserController::class,'index'])->name('usersList'); //Kullanıcı Listeleme => /admin/user/index
Route::get('/admin/user/create',[UserController::class,'create'])->name('usersAdd'); //Kullanıcı Ekleme  => /admin/user/create
Route::get('/admin/user/edit',[UserController::class,'edit'])->name('usersEdit'); //Kullanıcı Düzenleme => /admin/category/edit

//Satış Yönetimi
Route::get('/admin/cart/index',[CartController::class,'index'])->name('cartList'); //Satış Listeleme => /admin/cart/index
Route::get('/admin/cart/view',[CartController::class,'show'])->name('cartShow'); //Satış Görüntüleme => /admin/cart/view
