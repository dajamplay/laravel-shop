<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(CartService $cartService): View
    {
        return view('pages.order.index', [
            'products' => $cartService->products()
        ]);
    }
}
