<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard')->middleware(['auth', 'verified'])->group( function () {
    Route::get('/', [DashboardController::class, 'index'])->name('.index');
});
