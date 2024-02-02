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

Route::get('/',[App\Http\Controllers\MainController::class,'index'])->name('home');



// Route::get('abc',[App\Http\Controllers\TestController::class,'xyz']);


// For Admin

Route::group(['prefix' => 'admin'], function () {
    Route::get('/',[App\Http\Controllers\AdminController::class,'index'])->name('admin');
    Route::get('add-product',[App\Http\Controllers\AdminController::class,'addProduct'])->name('addProduct');
});


Auth::routes();


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
