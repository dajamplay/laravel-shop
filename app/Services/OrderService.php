<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;

class OrderService
{
    public function productsFromCart(array $products): Collection
    {
        return Product::query()->limit(5)->get();
    }
}
