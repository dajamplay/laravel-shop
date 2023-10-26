<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index(): View
    {
        seo()->description = 'Тестовое описание';
        seo()->title = 'Тестовый заголовок';

        dd(Product::all());

        return view('public.home.index');
    }
}
