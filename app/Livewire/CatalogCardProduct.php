<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class CatalogCardProduct extends Component
{
    public Product $product;

    public function mount(Product $product): void
    {
        $this->product = $product;
    }

    public function render(): View
    {
        return view('livewire.catalog-card-product');
    }
}
