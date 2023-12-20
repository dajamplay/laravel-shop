<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class FavoriteService
{
    private const FAVORITES = 'productInFavorite';

    public function addProduct(Product $product): void
    {
        $productsInFavorite = $this->products();

        if(isset($productsInFavorite[$product->id])) {
            unset($productsInFavorite[$product->id]);
        } else {
            $productsInFavorite[$product->id] = $product->toArray();
        }

        Session::put(self::FAVORITES, $productsInFavorite);
    }

    public function products()
    {
        return Session::get(self::FAVORITES) ?? [];
    }

    public function productsCount(): int
    {
        return count(Session::get(self::FAVORITES));
    }

    public function clear(): void
    {
        Session::put(self::FAVORITES, []);
    }

    public function isFavorite(int $id): bool
    {
        $productsInFavorite = $this->products();

        return isset($productsInFavorite[$id]);
    }

    public function removeProduct(int $id): void
    {
        $productsInFavorite = $this->products();

        if(isset($productsInFavorite[$id])) {
            unset($productsInFavorite[$id]);
        }

        Session::put(self::FAVORITES, $productsInFavorite);
    }
}
