<?php

namespace App\ViewModels\User;

use App\Models\User;
use Spatie\ViewModels\ViewModel;

class UserShowViewModel extends ViewModel
{
    protected $view = 'admin.users.show';

    public function __construct(
        private readonly User $user
    ){}

    public function user(): User
    {
        return $this->user;
    }
}
