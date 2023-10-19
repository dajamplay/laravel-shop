<?php

namespace App\ViewModels\User;

use App\Http\Filters\UserFilter;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class UserIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    private UserFilter $filter;

    protected $view = 'admin.users.index';

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
}
