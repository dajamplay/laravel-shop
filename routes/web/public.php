<?php

use App\Http\Controllers\Public;
use Illuminate\Support\Facades\Route;

Route::get('/', [Public\HomeController::class, 'index'])->name('public.index');

Route::get('/shop', [Public\ShopController::class, 'index'])->name('shop.index');

