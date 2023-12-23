<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class FavoriteService
{
    private const FAVORITES = 'productInFavorite';

    public function addProduct(Product $product): void
    {
        $productsInFavorite = $this->productsIds();

        if(isset($productsInFavorite[$product->id])) {
            unset($productsInFavorite[$product->id]);
        } else {
            $productsInFavorite[$product->id] = $product->id;
        }

        Session::put(self::FAVORITES, $productsInFavorite);
    }

    public function products(): array
    {
        return Product::query()
            ->find(array_keys($this->productsIds()))
            ->toArray() ?? [];
    }

    public function productsIds()
    {
        return Session::get(self::FAVORITES) ?? [];
    }

    public function productsCount(): int
    {
        return count(Session::get(self::FAVORITES) ?? []);
    }

    public function clear(): void
    {
        Session::put(self::FAVORITES, []);
    }

    public function isFavorite(int $id): bool
    {
        $productsInFavorite = $this->productsIds();

        return isset($productsInFavorite[$id]);
    }

    public function removeProduct(int $id): void
    {
        $productsInFavorite = $this->productsIds();

        if(isset($productsInFavorite[$id])) {
            unset($productsInFavorite[$id]);
        }

        Session::put(self::FAVORITES, $productsInFavorite);
    }
}
