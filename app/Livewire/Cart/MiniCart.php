<?php

namespace App\Livewire\Cart;

use Illuminate\View\View;
use Livewire\Component;

class MiniCart extends Component
{
    public array $products = [];

    public function mount(): void
    {
        //
    }

    public function render(): View
    {
        return view('livewire.cart.mini-cart');
    }
}
