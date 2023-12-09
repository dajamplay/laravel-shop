<?php

namespace App\Livewire\Search;

use App\Http\Filters\ProductFilter;
use App\Models\Product;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public string $filter_title = '';

    const PER_PAGE = 12;

    public function mount(): void
    {
        //
    }

    public function updatedFilterTitle(): void
    {
        $this->resetPage();
    }

    /**
     * @throws BindingResolutionException
     */
    public function render(): View
    {
        $filter = $this->createFilter([
            'filter_title' => $this->filter_title,
        ]);

        $products = $this->filter_title ? Product::query()->filter($filter)->paginate(self::PER_PAGE) : [];

        return view('livewire.search.search', compact(['products', 'filter']));
    }

    /**
     * @throws BindingResolutionException
     */
    private function createFilter(array $params): ProductFilter {
        return app()->makeWith(ProductFilter::class, ['params' => $params]);
    }
}
