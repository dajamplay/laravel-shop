<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;




Route::middleware('auth:sanctum')->group( function () {

    Route::post('/logout', [Api\v1\AuthController::class, 'logout']);
    Route::get('/user', fn (Request $request) => $request->user());

    Route::resource('users', Api\v1\UserController::class)->middleware('auth:sanctum');

});

Route::post('/login', [Api\v1\AuthController::class, 'login'])->name('api.login');
