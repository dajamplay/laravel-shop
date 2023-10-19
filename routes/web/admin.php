<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->name('admin.')
    ->middleware([
        'auth',
        'verified',
    ])
    ->group( function () {

    Route::get('/', [Admin\AdminController::class, 'index'])->name('index');

    Route::resource('users', Admin\UserController::class);

});
