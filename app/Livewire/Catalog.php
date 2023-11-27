<?php

namespace App\Livewire;

use App\Http\Filters\ProductFilter;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class Catalog extends Component
{
    public string $filter_title = '';

    private ProductFilter $filter;

    public function render(): View
    {
        $this->createFilter([
            'filter_title' => $this->filter_title
        ]);

        $products = Product::query()->filter($this->filter)->get();

        return view('livewire.catalog', [
            'products' => $products
        ]);
    }

    private function createFilter(array $params) {
        $this->filter = app()->makeWith(ProductFilter::class, ['params' => $params]);
    }
}
