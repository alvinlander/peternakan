<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use TCG\Voyager\Facades\Voyager;
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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('product',[ProductController::class,'index'])->name('product.index');
Route::get('product/{slug}',[ProductController::class,'show']);
Route::get('about',[AboutController::class,'index'])->name('about.index');
Route::get('gallery',[GalleryController::class,'index'])->name('gallery.index');
Route::get('contact',[ContactController::class,'index'])->name('contact.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
