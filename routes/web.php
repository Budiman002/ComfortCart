<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-panel', [AdminController::class,'admin']);

//page create product
Route::get('/add-product', [ProductController::class,'redirectToCreateProductPage']);

//post data produk
Route::post('/post-add-product',[ProductController::class, 'createProduct']);


//page update produck
Route::get('/edit-product-page/{id}',[ProductController::class,'editProductPage']);
//post update data dari table
Route::post('/edit-product/{id}',[ProductController::class,'editProduct']);


//delete
Route::post('/delete-product/{id}',[ProductController::class, 'deleteProduct']);