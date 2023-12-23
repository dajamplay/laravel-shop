<?php

namespace App\Livewire\Order;

use App\Services\CartService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Order extends Component
{
    public array $products = [];

    private CartService $cartService;

    public function boot(CartService $cartService): void
    {
        $this->cartService = $cartService;
        $this->refreshProducts();
    }

    #[On('delete-cart')]
    public function deleteProduct(): void
    {
        $this->refreshProducts();
    }

    #[On('qty-cart-from-mini-cart')]
    public function qtyProduct(): void
    {
        $this->refreshProducts();
    }

    public function refreshProducts(): void
    {
        $this->products = $this->cartService->products();
    }

    public function render(): View
    {
        return view('livewire.order.order');
    }
}
