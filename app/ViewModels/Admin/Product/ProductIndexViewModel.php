<?php

namespace App\ViewModels\Admin\Product;

use App\Models\Product;

use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class ProductIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    protected $view = 'admin.products.index';

    public function __construct()
    {
        //
    }

    public function products(): LengthAwarePaginator
    {
        return Product::query()
            ->paginate(self::PER_PAGE);
    }
}
