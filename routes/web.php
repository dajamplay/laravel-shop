<?php

use Illuminate\Support\Facades\Route;

require base_path('routes/web/auth.php');

require base_path('routes/web/admin.php');

Route::get('/{any?}', function () {
    return view('app');
})->where('any', '.*');
