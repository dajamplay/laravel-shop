<?php

namespace App\ViewModels\Admin\Slide;

use App\Models\Slide;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class SlideIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    public function slides(): LengthAwarePaginator
    {
        return Slide::query()
            ->paginate(self::PER_PAGE);
    }
}
