<?php

use App\Http\Controllers\Blog\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('blog')->name('blog')->group( function () {

    Route::prefix('posts')->name('.posts')->group( function () {
        Route::get('/', [PostController::class, 'index'])->name('.index');
        Route::get('/{post:slug}', [PostController::class, 'show'])->name('.show');
    });

});
