<?php

namespace App\ViewModels\Admin\Line;

use App\Http\Filters\LineFilter;
use App\Models\Line;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class LineIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    /**
     * @throws BindingResolutionException
     */
    public function lines(): LengthAwarePaginator
    {
        $filter = app()->make(LineFilter::class);

        return Line::query()
            ->filter($filter)
            ->paginate(self::PER_PAGE);
    }
}
