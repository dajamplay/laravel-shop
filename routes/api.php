<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

Route::resource('users', Api\v1\UserController::class);
