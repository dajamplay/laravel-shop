<?php

namespace App\Livewire\Cart;

use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class CartIconMenu extends Component
{
    public int $cartProductsCount;

    private CartService $cartService;

    public function boot(CartService $cartService): void
    {
        $this->cartService = $cartService;
    }

    public function mount(): void
    {
        $this->cartProductsCount = $this->cartService->productsCount();
    }

    #[On('delete-cart')]
    #[On('add-cart')]
    #[On('qty-cart')]
    #[On('qty-cart-from-mini-cart')]
    public function refreshFavorite(): void
    {
        $this->cartProductsCount = $this->cartService->productsCount();
    }

    public function render(): View
    {
        return view('livewire.cart.cart-icon-menu');
    }
}
