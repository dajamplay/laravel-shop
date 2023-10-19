<?php

//use App\Http\Controllers\Api\V1\AuthController;
//use App\Http\Controllers\Api\V1\EventController;
//use App\Http\Controllers\Api\V1\SubscribeController;
//use Illuminate\Support\Facades\Route;
//
//Route::post('/login', [AuthController::class, 'login']);
//Route::post('/register', [AuthController::class, 'register']);
//
//Route::group(['middleware' => 'auth:sanctum'], function () {
//
//    Route::get('/events', [EventController::class, 'index']);
//    Route::post('/events', [EventController::class, 'store']);
//    Route::delete('/events/{event_id}', [EventController::class, 'remove']);
//
//    Route::post('/subscribe/{event_id}', [SubscribeController::class, 'subscribe']);
//    Route::delete('/unsubscribe/{event_id}', [SubscribeController::class, 'unsubscribe']);
//
//    Route::get('/logout', [AuthController::class, 'logout']);
//
//});
