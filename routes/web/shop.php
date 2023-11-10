<?php

use App\Http\Controllers\Shop\BrandController;
use App\Http\Controllers\Shop\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('shop')->name('shop')->group( function () {

//    Route::get('/', [ShopController::class, 'index'])->name('index');

    Route::prefix('products')->name('.products')->group( function () {
        Route::get('/', [ProductController::class, 'index'])->name('.index');
        Route::get('/{product:slug}', [ProductController::class, 'show'])->name('.show');
    });

    Route::prefix('brands')->name('.brands')->group( function () {
        Route::get('/', [BrandController::class, 'index'])->name('.index');
        Route::get('/{brand:slug}', [BrandController::class, 'show'])->name('.show');
    });

});
