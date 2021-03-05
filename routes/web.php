<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/product', function () {
    return view('product.product');
})->name('product');

Route::middleware(['auth:sanctum', 'verified'])->get('/ImportProduct', function () {
    return view('ImportProduct.ImportProduct');
})->name('ImportProduct');

Route::middleware(['auth:sanctum', 'verified'])->get('/ExportProduct', function () {
    return view('ExportProduct.ExportProduct');
})->name('ExportProduct');


Route::middleware(['auth:sanctum', 'verified'])->get('/Refund', function () {
    return view('Refund.Refund');
})->name('Refund'); 


Route::middleware(['auth:sanctum', 'verified'])->get('/CheckStock', function () {
    return view('CheckStock.CheckStock');
})->name('CheckStock');

Route::middleware(['auth:sanctum', 'verified'])->get('/Report', function () {
    return view('Report.Report');
})->name('Report');

Route::middleware(['auth:sanctum', 'verified'])->get('/History', function () {
    return view('History.History');
})->name('History');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('users', \App\Http\Controllers\UserController::class);
});

Route::get('/navbar', function () {
    return view('CheckStock.CheckStock');
});
// Route::group(['middleware' => 'auth'], function () {
//     Route::resource('tasks', \App\Http\Controllers\TasksController::class);

//     Route::resource('users', \App\Http\Controllers\UsersController::class);
// });