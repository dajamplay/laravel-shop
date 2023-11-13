<?php

namespace App\ViewModels\Admin\Line;

use App\Models\Line;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class LineIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    public function lines(): LengthAwarePaginator
    {
        return Line::query()
            ->paginate(self::PER_PAGE);
    }
}
