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
    public int $qty = 1;
    public bool $buttons;
    public bool $isCart;

    private CartService $cartService;

    public function boot(CartService $cartService): void
    {
        $this->cartService = $cartService;
    }

    public function mount(Product $product, bool $buttons = false): void
    {
        $this->product = $product;
        $this->buttons = $buttons;
        $this->isCart = $this->cartService->isCart($this->product->id);
    }

    #[On('delete-cart')]
    public function deleteCart(): void
    {
        $this->isCart = $this->cartService->isCart($this->product->id);
    }

    public function addToCart(): void
    {
        $this->cartService->addProduct($this->product);
        $this->isCart = $this->cartService->isCart($this->product->id);
        $this->dispatch('add-cart');
    }

    public function qtyPlus(): void
    {
        $this->qty++;
    }

    public function qtyMinus(): void
    {
        if($this->qty > 1) $this->qty--;
    }

    public function render(): View
    {
        return view('livewire.cart.cart-add-button');
    }
}
