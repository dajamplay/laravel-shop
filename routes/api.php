<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

require base_path('routes/api/auth.php');

Route::middleware('auth:sanctum')->group( function () {

    Route::resource('users', Api\v1\UserController::class)->middleware('auth:sanctum');

});


