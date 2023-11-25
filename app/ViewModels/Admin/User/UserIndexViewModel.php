<?php

namespace App\ViewModels\Admin\User;

use App\Http\Filters\UserFilter;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class UserIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    private UserFilter $filter;

    public function __construct(UserFilter $filter)
    {
        $this->filter = $filter;
    }

    public function users(): LengthAwarePaginator
    {
        return User::query()
            ->filter($this->filter)
            ->paginate(self::PER_PAGE);
    }

    public function roles(): Collection
    {
        return Role::all();
    }
}
