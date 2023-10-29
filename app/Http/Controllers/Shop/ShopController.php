<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function index(): View
    {
        seo()->description = 'Магазин';

        seo()->title = 'Магазин профессиональной косметики';

        return view('shop.index');
    }
}
