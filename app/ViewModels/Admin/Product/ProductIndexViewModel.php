<?php

namespace App\ViewModels\Admin\Product;

use App\Data\ProductData;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\LaravelData\PaginatedDataCollection;
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

//    public function products(): PaginatedDataCollection
//    {
//        return ProductData::collection(Product::query()
//            ->paginate(self::PER_PAGE));
//    }
}
