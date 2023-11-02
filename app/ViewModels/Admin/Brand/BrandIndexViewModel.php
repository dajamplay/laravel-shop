<?php

namespace App\ViewModels\Admin\Brand;

use App\Models\Brand;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class BrandIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    protected $view = 'admin.brands.index';

    public function __construct()
    {
        //
    }

    public function brands(): LengthAwarePaginator
    {
        return Brand::query()
            ->paginate(self::PER_PAGE);
    }
}
