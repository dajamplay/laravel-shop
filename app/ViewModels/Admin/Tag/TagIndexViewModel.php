<?php

namespace App\ViewModels\Admin\Tag;

use App\Models\Tag;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class TagIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    public function tags(): LengthAwarePaginator
    {
        return Tag::query()
            ->paginate(self::PER_PAGE);
    }
}
