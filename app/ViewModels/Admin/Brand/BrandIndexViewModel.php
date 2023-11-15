<?php

namespace App\ViewModels\Admin\Brand;

use App\Http\Filters\BrandFilter;
use App\Models\Brand;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class BrandIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    /**
     * @throws BindingResolutionException
     */
    public function brands(): LengthAwarePaginator
    {
        $filter = app()->make(BrandFilter::class);

        return Brand::query()
            ->filter($filter)
            ->paginate(self::PER_PAGE);
    }
}
