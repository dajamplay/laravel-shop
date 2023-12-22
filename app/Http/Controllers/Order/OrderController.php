<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use App\Services\OrderService;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(OrderService $orderService, CartService $cartService): View
    {
        $productsForOrder = $orderService->productsFromCart($cartService->products());

        return view('pages.order.index', [
            'products' => $productsForOrder
        ]);
    }
}
