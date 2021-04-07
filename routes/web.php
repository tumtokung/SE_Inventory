<?php

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
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('ImportProductOrder', \App\Http\Controllers\ImportProductOrderController::class);
    Route::post('importproductorder',[\App\Http\Controllers\ImportProductOrderController::class,'storeOrder'])->name('ImportProductOrder.storeOrder');
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    
    
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/products', function () {
    return view('product.Shelf.index');
})->name('products');


Route::middleware(['auth:sanctum', 'verified'])->get('/ExportProduct', function () {
    return view('ExportProduct.ExportProduct');
})->name('ExportProduct');


Route::middleware(['auth:sanctum', 'verified'])->get('/Refund', function () {
    return view('Refund.index');
})->name('Refund');


Route::middleware(['auth:sanctum', 'verified'])->get('/CheckStock', function () {
    return view('CheckStock.index');
})->name('CheckStock');

Route::middleware(['auth:sanctum', 'verified'])->get('/Report', function () {
    return view('Report.Report');
})->name('Report');

Route::middleware(['auth:sanctum', 'verified'])->get('/History', function () {
    return view('History.History');
})->name('History');


Route::get('/test', function () {
    return view('product.ProductTable.index');
});

Route::get('/navbar', function () {
    return view('navbar');
});


