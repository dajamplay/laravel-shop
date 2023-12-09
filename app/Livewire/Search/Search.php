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

    public string $global_search = '';

    const PER_PAGE = 20;

    public function mount(): void
    {
        //
    }

    public function updatedGlobalSearch(): void
    {
        $this->resetPage();
    }

    /**
     * @throws BindingResolutionException
     */
    public function render(): View
    {
        $filter = $this->createFilter([
            'filter_title' => $this->global_search,
        ]);

        $products = $this->global_search ? Product::query()->filter($filter)->paginate(self::PER_PAGE) : [];

        return view('livewire.search.search', compact(['products', 'filter']));
    }

    /**
     * @throws BindingResolutionException
     */
    private function createFilter(array $params): ProductFilter {
        return app()->makeWith(ProductFilter::class, ['params' => $params]);
    }
}
