<?php

namespace App\Livewire;

use App\Http\Filters\ProductFilter;
use App\Models\Brand;
use App\Models\Line;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\View\View;
use Livewire\Component;

class Catalog extends Component
{
    public string $filter_title = '';
    public string $filter_brand = '';
    public string $filter_line = '';
    public array $filter_tags = [];

    private ProductFilter $filter;

    public function render(): View
    {
        $this->createFilter([
            'filter_title' => $this->filter_title,
            'filter_brand' => $this->filter_brand,
            'filter_line' => $this->filter_line,
        ]);

        $products = Product::query()->filter($this->filter)->get();
        $brands = Brand::all();
        $lines = Line::all();
        $tags = Tag::all();

        return view('livewire.catalog', [
            'products' => $products,
            'brands' => $brands,
            'lines' => $lines,
            'tags' => $tags,
        ]);
    }

    public function brandFilter(Brand $brand)
    {
        $this->filter_brand = $brand->title ?? '';
    }

    public function lineFilter(Line $line)
    {
        $this->filter_line = $line->title ?? '';
    }

    private function createFilter(array $params) {
        $this->filter = app()->makeWith(ProductFilter::class, ['params' => $params]);
    }
}
