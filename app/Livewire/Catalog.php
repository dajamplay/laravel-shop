<?php

namespace App\Livewire;

use App\Http\Filters\ProductFilter;
use App\Models\Brand;
use App\Models\Line;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Catalog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    const PER_PAGE = 12;

    #[Url]
    public string $filter_title = '';
    #[Url]
    public string $filter_brand = '';
    #[Url]
    public string $filter_line = '';
    #[Url]
    public array $filter_tags = [];
    #[Url]
    public string $price = '';
    #[Url]
    public string $page = '';

    private ProductFilter $filter;

    public function render(): View
    {
        $this->createFilter([
            'filter_title' => $this->filter_title,
            'filter_brand' => $this->filter_brand,
            'filter_line' => $this->filter_line,
        ]);

        $products = Product::query()->filter($this->filter)->paginate(self::PER_PAGE);;
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
        $this->resetPage();
    }

    public function lineFilter(Line $line)
    {
        $this->filter_line = $line->title ?? '';
        $this->resetPage();
    }

    private function createFilter(array $params) {
        $this->filter = app()->makeWith(ProductFilter::class, ['params' => $params]);
    }
}
