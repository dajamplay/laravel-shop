<?php

use App\Http\Controllers\Home\FeedbackController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::name('home')->group( function () {

    Route::get('/', [HomeController::class, 'index'])->name('.index');

    Route::get('/contacts', [HomeController::class, 'contacts'])->name('.contacts');
    Route::post('/contacts-store', [HomeController::class, 'contactsStoreAndSend'])->name('.contacts.store');

    Route::get('/about', [HomeController::class, 'about'])->name('.about');

    Route::get('/delivery', [HomeController::class, 'delivery'])->name('.delivery');

    Route::prefix('feedbacks')->name('.feedback')->group( function () {
        Route::get('/', [FeedbackController::class, 'index'])->name('.index');
        Route::get('/{feedback:id}', [FeedbackController::class, 'show'])->name('.show');
    });

});
