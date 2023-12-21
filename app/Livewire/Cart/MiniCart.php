<?php

namespace App\Livewire\Cart;

use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class MiniCart extends Component
{
    public array $cartProducts = [];

    private CartService $cartService;

    public function boot(CartService $cartService): void
    {
        $this->cartService = $cartService;
        $this->cartProducts = $cartService->products();
    }

    #[On('add-cart')]
    public function addProduct(): void
    {
        $this->refreshCartProducts();
    }

    public function removeProduct(int $id): void
    {
        $this->cartService->removeProduct($id);
        $this->refreshCartProducts();
        $this->dispatch('delete-cart');
    }

    public function clearProducts(): void
    {
        $this->cartService->clear();
        $this->refreshCartProducts();
    }

    public function refreshCartProducts(): void
    {
        $this->cartProducts = $this->cartService->products();
    }

    public function render(): View
    {
        return view('livewire.cart.mini-cart');
    }
}
