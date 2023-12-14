<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class FavoriteService
{
    private const FAVORITES = 'productInFavorite';

    public function addProduct(Product $product): void
    {
        $productsInFavorite = $this->getProducts();

        if(isset($productsInFavorite[$product->id])) {
            unset($productsInFavorite[$product->id]);
        } else {
            $productsInFavorite[$product->id] = $product->toArray();
        }

        Session::put(self::FAVORITES, $productsInFavorite);
    }

    public function getProducts()
    {
        return Session::get(self::FAVORITES) ?? [];
    }

    public function clear(): void
    {
        Session::put(self::FAVORITES, []);
    }
}
