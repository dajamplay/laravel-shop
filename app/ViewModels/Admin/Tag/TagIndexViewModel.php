<?php

namespace App\ViewModels\Admin\Tag;

use App\Http\Filters\TagFilter;
use App\Models\Tag;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class TagIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    /**
     * @throws BindingResolutionException
     */
    public function tags(): LengthAwarePaginator
    {
        $filter = app()->make(TagFilter::class);

        return Tag::query()
            ->filter($filter)
            ->paginate(self::PER_PAGE);
    }
}
