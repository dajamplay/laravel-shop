<?php

namespace App\ViewModels\Admin\Post;

use App\Http\Filters\PostFilter;
use App\Models\Post;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class PostIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    /**
     * @throws BindingResolutionException
     */
    public function posts(): LengthAwarePaginator
    {
        $filter = app()->make(PostFilter::class);

        return Post::query()
            ->filter($filter)
            ->paginate(self::PER_PAGE);
    }
}
