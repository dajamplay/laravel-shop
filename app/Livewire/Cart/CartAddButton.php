<?php

namespace App\Livewire\Cart;

use App\Models\Product;
use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class CartAddButton extends Component
{
    public Product $product;
    public int $qty;
    public bool $isCatalog;
    public bool $isCart;

    private CartService $cartService;

    public function boot(CartService $cartService): void
    {
        $this->cartService = $cartService;
    }

    public function mount(Product $product, bool $isCatalog = true): void
    {
        $this->product = $product;
        $this->isCatalog = $isCatalog;
        $this->isCart = $this->isCart();
        $this->qtyRefresh();
    }

    #[On('delete-cart')]
    public function deleteCart(): void
    {
        $this->isCart = $this->isCart();
        $this->qtyRefresh();
    }

    #[On('qty-cart-from-mini-cart')]
    public function qtyFromMiniCart(): void
    {
        $this->qtyRefresh();
    }

    public function addToCart(): void
    {
        $this->cartService->addProduct($this->product, $this->qty);
        $this->isCart = $this->isCart();
        $this->dispatch('add-cart');
    }

    public function qtyPlus(): void
    {
        $this->qty++;

        if ($this->isCart()) {
            $this->cartService->qtyPlus($this->product->id);
        }

        $this->dispatch('qty-cart');
    }

    public function qtyMinus(): void
    {
        if ($this->qty > 1) {

            $this->qty--;

            if ($this->isCart()) {
                $this->cartService->qtyMinus($this->product->id);
            }

            $this->dispatch('qty-cart');
        } else {
            if ($this->isCart()) {
                //toggle product
                $this->addToCart();
            }
        }
    }

    private function isCart(): bool
    {
        return $this->cartService->isCart($this->product->id);
    }

    private function qtyRefresh(): void
    {
        $this->qty = $this->cartService->qty($this->product->id);
    }

    public function render(): View
    {
        return view('livewire.cart.cart-add-button');
    }
}
