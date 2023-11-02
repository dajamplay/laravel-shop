<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware([ 'auth','verified'])->group( function () {

    Route::get('/', [Admin\AdminController::class, 'index'])->name('index');

    Route::resource('users', Admin\UserController::class);

    Route::resource('products', Admin\ProductController::class);
    Route::resource('brands', Admin\BrandController::class);
    Route::resource('tags', Admin\TagController::class);
    Route::resource('lines', Admin\LineController::class);

    Route::resource('orders', Admin\OrdersController::class)->only(['index']);

    Route::resource('posts', Admin\PostController::class)->only(['index']);

    Route::resource('settings', Admin\SettingsController::class)->only(['index']);

});
