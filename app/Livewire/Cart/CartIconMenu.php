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
    public function deleteFavorite(): void
    {
        $this->cartProductsCount = $this->cartService->productsCount();
    }

    #[On('add-cart')]
    public function addFavorite(): void
    {
        $this->cartProductsCount = $this->cartService->productsCount();
    }

    public function render(): View
    {
        return view('livewire.cart.cart-icon-menu');
    }
}
