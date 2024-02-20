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

Route::get('search',[App\Http\Controllers\MainController::class,'search'])->name('search');



// Route::get('abc',[App\Http\Controllers\TestController::class,'xyz']);


// For Admin

Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('/',[App\Http\Controllers\AdminController::class,'index'])->name('admin');
    // Route::get('add-product',[App\Http\Controllers\AdminController::class,'addProduct'])->name('addProduct');
    // Route::post('add-product',[App\Http\Controllers\AdminController::class,'addProduct'])->name('addProduct');
    Route::match(['get','post'],'add-product',[App\Http\Controllers\AdminController::class,'addProduct'])->name('addProduct');
    Route::get('all-products',[App\Http\Controllers\AdminController::class,'allProducts'])->name('allProducts');
    Route::get('all-pending-products',[App\Http\Controllers\AdminController::class,'allPendingProducts'])->name('allPendingProducts');
    Route::match(['get','post'],'product-approved/{any}',[App\Http\Controllers\AdminController::class,'approvedProduct'])->name('approvedProduct');
    Route::match(['get','post'],'product-unapproved/{any}',[App\Http\Controllers\AdminController::class,'unapprovedProduct'])->name('unapprovedProduct'); 
    Route::match(['get','post'],'update-product/{any}',[App\Http\Controllers\AdminController::class,'updateProduct'])->name('updateProduct');
    Route::get('all-categories',[App\Http\Controllers\AdminController::class,'allCategories'])->name('allCategories');
    Route::match(['get','post'],'add-category',[App\Http\Controllers\AdminController::class,'addCategory'])->name('addCategory');
    Route::match(['get','post'],'delete-category/{any}',[App\Http\Controllers\AdminController::class,'deleteCategory'])->name('deleteCategory');
});


Auth::routes();


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
