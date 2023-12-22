<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartService
{
    private const CART = 'productInCart';

    public function addProduct(Product $product, int $qty = 1): void
    {
        $productsInCart = $this->productsIdsAndQty();

        if (isset($productsInCart[$product->id])) {
            unset($productsInCart[$product->id]);
        } else {
            $productsInCart[$product->id] = $qty;
        }

        Session::put(self::CART, $productsInCart);
    }

    public function productsIdsAndQty()
    {
        return Session::get(self::CART) ?? [];
    }

    public function products(): array
    {
        $products = Product::query()
            ->find(array_keys($this->productsIdsAndQty()))->map(function ($product) {
                return array_merge(
                    $product->toArray(), ['cart_qty' => $this->qty($product->id)]
                );
            });

        return $products?->toArray() ?? [];
    }

    public function qty(int $id): int
    {
        $productsInCart = $this->productsIdsAndQty();

        return $productsInCart[$id] ?? 1;
    }

    public function qtyPlus(int $id): bool
    {
        $productsInCart = $this->productsIdsAndQty();

        if (isset($productsInCart[$id])) {
            $productsInCart[$id]++;

            Session::put(self::CART, $productsInCart);

            return true;
        }

        return false;
    }

    public function qtyMinus(int $id): bool
    {
        $productsInCart = $this->productsIdsAndQty();

        if (isset($productsInCart[$id]) && $productsInCart[$id] > 1) {
            $productsInCart[$id]--;

            Session::put(self::CART, $productsInCart);

            return true;
        }

        return false;
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
        $productsInCart = $this->productsIdsAndQty();

        return isset($productsInCart[$id]);
    }

    public function removeProduct(int $id): void
    {
        $productsInCart = $this->productsIdsAndQty();

        if (isset($productsInCart[$id])) {
            unset($productsInCart[$id]);
        }

        Session::put(self::CART, $productsInCart);
    }
}
