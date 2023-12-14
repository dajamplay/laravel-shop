<?php

use App\Http\Controllers\Shop\BrandController;
use App\Http\Controllers\Shop\LineController;
use App\Http\Controllers\Shop\TagController;
use App\Http\Controllers\Shop\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('shop')->name('shop')->group( function () {

    Route::prefix('products')->name('.products')->group( function () {
        Route::get('/', [ProductController::class, 'index'])->name('.index');
        Route::get('/{product:slug}', [ProductController::class, 'show'])->name('.show');
    });

    Route::prefix('brands')->name('.brands')->group( function () {
        Route::get('/{brand:slug}', [BrandController::class, 'show'])->name('.show');
    });

    Route::prefix('lines')->name('.lines')->group( function () {
        Route::get('/', [LineController::class, 'index'])->name('.index');
        Route::get('/{line:slug}', [LineController::class, 'show'])->name('.show');
    });

    Route::prefix('tags')->name('.tags')->group( function () {
        Route::get('/', [TagController::class, 'index'])->name('.index');
        Route::get('/{tag:slug}', [TagController::class, 'show'])->name('.show');
    });

});
