<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware([ 'auth', 'admin'])->group( function () {

    Route::get('/', [Admin\AdminController::class, 'index'])->name('index');

    Route::resource('users', Admin\UserController::class);

    Route::resource('products', Admin\ProductController::class);
    Route::get('products/{id}/restore', [Admin\ProductController::class, 'restore'])
        ->name('products.restore');

    Route::resource('brands', Admin\BrandController::class);
    Route::resource('tags', Admin\TagController::class);
    Route::resource('lines', Admin\LineController::class);
    Route::resource('feedback', Admin\FeedbackController::class);
    Route::resource('slides', Admin\SlideController::class);

    Route::resource('orders', Admin\OrderController::class)->only(['index']);

    Route::resource('messages', Admin\MessageController::class)->only(['index', 'show']);

    Route::resource('posts', Admin\PostController::class);

    Route::resource('settings', Admin\SettingController::class)->only(['index', 'update']);
    Route::post('settings/update_all', [Admin\SettingController::class, 'updateAll'])
        ->name('settings.update_all');

});
