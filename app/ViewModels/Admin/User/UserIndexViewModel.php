<?php

namespace App\ViewModels\Admin\User;

use App\Http\Filters\UserFilter;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class UserIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(UserFilter $filter){}

    /**
     * @throws BindingResolutionException
     */
    public function users(): LengthAwarePaginator
    {
        $filter = app()->make(UserFilter::class);

        return User::query()
            ->withoutAdmin()
            ->filter($filter)
            ->paginate(self::PER_PAGE);
    }

    public function roles(): Collection
    {
        return Role::all();
    }
}
