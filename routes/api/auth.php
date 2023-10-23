<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;
use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->group( function () {

    Route::post('/logout', [Api\v1\AuthController::class, 'logout']);

    Route::get('/user', fn (Request $request) => $request->user());

});

Route::post('/login', [Api\v1\AuthController::class, 'login']);
