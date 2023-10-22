<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

Route::middleware('auth:sanctum')->get('/user', function(Request $request) {
    return $request->user();
});

Route::resource('users', Api\v1\UserController::class)->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group( function () {

    Route::post('/logout', [Api\v1\AuthController::class, 'destroy'])
        ->name('api.v1.logout');

});
