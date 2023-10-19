<?php

use App\Http\Controllers\Public;
use Illuminate\Support\Facades\Route;

Route::get('/', [Public\PublicController::class, 'index'])->name('public.index');
