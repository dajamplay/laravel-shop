<?php

namespace App\ViewModels\Admin\Product;

use App\Http\Filters\ProductFilter;
use App\Models\Product;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class ProductIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    /**
     * @throws BindingResolutionException
     */
    public function products(): LengthAwarePaginator
    {
        $filter = app()->make(ProductFilter::class);

        return Product::query()
            ->filter($filter)
            ->paginate(self::PER_PAGE);
    }
}
