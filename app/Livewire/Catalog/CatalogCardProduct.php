<?php

namespace App\Livewire\Catalog;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class CatalogCardProduct extends Component
{
    public Product $product;

    public array $tagsList;

    public function mount(Product $product): void
    {
        $this->product = $product;

        $this->tagsList = $product->tags->pluck('title')->toArray();
    }

    public function render(): View
    {
        return view('livewire.catalog.catalog-card-product');
    }
}
