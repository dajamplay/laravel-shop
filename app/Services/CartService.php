<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartService
{
    private const CART = 'productInCart';

    public function addProduct(Product $product): void
    {
        $productsInCart = $this->products();

        if(isset($productsInCart[$product->id])) {
            unset($productsInCart[$product->id]);
        } else {
            $productsInCart[$product->id] = $product->toArray();
        }

        Session::put(self::CART, $productsInCart);
    }

    public function products()
    {
        return Session::get(self::CART) ?? [];
    }

    public function productsCount(): int
    {
        return count(Session::get(self::CART) ?? []);
    }

    public function clear(): void
    {
        Session::put(self::CART, []);
    }

    public function isCart(int $id): bool
    {
        $productsInCart = $this->products();

        return isset($productsInCart[$id]);
    }

    public function removeProduct(int $id): void
    {
        $productsInCart = $this->products();

        if(isset($productsInCart[$id])) {
            unset($productsInCart[$id]);
        }

        Session::put(self::CART, $productsInCart);
    }
}
