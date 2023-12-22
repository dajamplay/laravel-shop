<?php

use App\Http\Controllers\Order\OrderController;
use Illuminate\Support\Facades\Route;

Route::prefix('order')->name('order')->group( function () {
    Route::get('/', [OrderController::class, 'index'])->name('.index');
});


