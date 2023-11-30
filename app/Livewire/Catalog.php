<?php

namespace App\Livewire;

use App\Http\Filters\ProductFilter;
use App\Models\Brand;
use App\Models\Line;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Collection;
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

    public int $productsCountAll = 0;

    public array $brands = [];
    public array $lines = [];
    public array $tags = [];


    public function mount(): void
    {
        $this->brands = Brand::query()->has('products')->get()->toArray();
        $this->lines = Line::query()->has('products')->get()->toArray();
        $this->tags = Tag::query()->has('products')->get()->toArray();
        $this->productsCountAll = Product::all()->count();
    }

    public function render(): View
    {
        $filter = $this->createFilter([
            'filter_title' => $this->filter_title,
            'filter_brand' => $this->filter_brand,
            'filter_line' => $this->filter_line,
            'filter_tags' => $this->filter_tags,
        ]);

        $brandCountFilter = $this->createFilter([
            'filter_title' => $this->filter_title,
            'filter_line' => $this->filter_line,
        ]);

        $lineCountFilter = $this->createFilter([
            'filter_title' => $this->filter_title,
            'filter_brand' => $this->filter_brand,
        ]);

        $products = Product::query()->filter($filter)->paginate(self::PER_PAGE);

        return view('livewire.catalog', compact([
             'products', 'filter', 'brandCountFilter', 'lineCountFilter'
        ]));
    }

    public function brandFilter(string $title = '')
    {
        $this->filter_brand = $title;
        $this->resetPage();
    }

    public function lineFilter(string $title = '')
    {
        $this->filter_line = $title;
        $this->resetPage();
    }

    public function tagFilter(int $id = -1, string $title = '')
    {
        if (array_key_exists($id, $this->filter_tags)) {
            unset($this->filter_tags[$id]);
        } else {
            $this->filter_tags[$id] = $title;
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
