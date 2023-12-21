<?php

namespace App\Livewire\Cart;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class CartAddButton extends Component
{
    public Product $product;
    public int $qty = 1;
    public bool $buttons;

    public function mount(Product $product, bool $buttons = false): void
    {
        $this->product = $product;
        $this->buttons = $buttons;
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
