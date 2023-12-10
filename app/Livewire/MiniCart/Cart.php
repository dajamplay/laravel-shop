<?php

namespace App\Livewire\MiniCart;

use Illuminate\View\View;
use Livewire\Component;

class Cart extends Component
{
    public array $products = [];

    public function mount(): void
    {
        //
    }

    public function render(): View
    {
        return view('livewire.mini-cart.cart');
    }
}
