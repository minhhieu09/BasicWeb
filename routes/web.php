<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/product-store', [ProductController::class, 'store'])->name('store');

//Create Product
Route::get('/create-product', [ProductController::class,'create'])->name('create');
Route::post('/products',[ProductController::class,'createProduct'])->name('createProduct');


//Update Product
Route::get('/product/update/{id}', [ProductController::class,'updateProduct'])->name('updateProduct');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('update');

//Delete Produt
Route::get('/product/delete/{id}', [ProductController::class,'deleteProduct'])->name('deleteProduct');

//Profile Customer
Route::get('/profile', [CustomerController::class,'updateProfile'])->name('updateProfile');
Route::post('/profile/update/{id}', [CustomerController::class, 'updateCustomer'])->name('updateCustomer');

//search
Route::get('/search', [ProductController::class, 'search'])->name('search');

//Login Customer
Route::get('login', function (){
    return view('product.auth.login');
})->middleware('productLogin')->name('login');
Route::post('login',[CustomerController::class,'login'])->name('loginCustomer');
Route::get('logout',[CustomerController::class,'logout'])->name('logout');
Route::post('register',[CustomerController::class,'register'])->name('register');
