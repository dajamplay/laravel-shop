<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group( function () {

    Route::post('/logout', [Auth\LoginController::class, 'destroy'])
        ->name('logout');

    Route::get('/email/verify/{id}/{hash}', Auth\VerifyEmailController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::get('/email/verify', Auth\EmailVerificationController::class)
        ->name('verification.notice');

    Route::post('/email/verification-notification', Auth\EmailVerificationNotificationController::class)
        ->name('verification.send');

});

Route::middleware('guest')->group( function () {

    Route::get('/login', [Auth\LoginController::class, 'create'])
        ->name('login');
    Route::post('/login', [Auth\LoginController::class, 'store'])
        ->middleware('throttle:5,1');

    Route::get('/register', [Auth\RegisterController::class, 'create'])
        ->name('register');
    Route::post('/register', [Auth\RegisterController::class, 'store']);

    Route::get('/forgot-password', [Auth\ForgotPasswordController::class, 'create'])
        ->name('password.request');
    Route::post('/forgot-password', [Auth\ForgotPasswordController::class, 'store'])
        ->name('password.email');

    Route::get('/reset-password', [Auth\ResetPasswordController::class, 'create'])
        ->name('password.reset');
    Route::post('/reset-password', [Auth\ResetPasswordController::class, 'update'])
        ->name('password.update');

});
