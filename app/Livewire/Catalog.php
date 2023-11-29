<?php

namespace App\Livewire;

use App\Http\Filters\ProductFilter;
use App\Models\Brand;
use App\Models\Line;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Contracts\Container\BindingResolutionException;
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
    private ProductFilter $brandCountFilter;
    private ProductFilter $lineCountFilter;

    public function render(): View
    {
        $this->filter = $this->createFilter([
            'filter_title' => $this->filter_title,
            'filter_brand' => $this->filter_brand,
            'filter_line' => $this->filter_line,
            'filter_tags' => $this->filter_tags,
        ]);

        $this->brandCountFilter = $this->createFilter([
            'filter_title' => $this->filter_title,
            'filter_line' => $this->filter_line,
        ]);

        $this->lineCountFilter = $this->createFilter([
            'filter_title' => $this->filter_title,
            'filter_brand' => $this->filter_brand,
        ]);

        $productsAll = Product::all();
        $products = Product::query()->filter($this->filter)->paginate(self::PER_PAGE);

        $brands = Brand::all();
        $lines = Line::all();
        $tags = Tag::all();

        return view('livewire.catalog', array_merge(compact(
                ['products','brands', 'lines', 'tags', 'productsAll']
        ), [
            'filter' => $this->filter,
            'brandCountFilter' => $this->brandCountFilter,
            'lineCountFilter' => $this->lineCountFilter,
        ]));
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

    public function tagFilter(Tag $tag)
    {
        if (array_key_exists($tag->id, $this->filter_tags)) {
            unset($this->filter_tags[$tag->id]);
        } else {
            $this->filter_tags[$tag->id] = $tag->title ?? '';
        }
        $this->resetPage();
    }

    /**
     * @throws BindingResolutionException
     */
    private function createFilter(array $params): ProductFilter {
        return app()->makeWith(ProductFilter::class, ['params' => $params]);
    }
}
