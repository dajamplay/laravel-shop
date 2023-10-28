<?php

namespace App\ViewModels\Admin\User;

use App\Models\User;
use Spatie\ViewModels\ViewModel;

class UserEditViewModel extends ViewModel
{
    protected $view = 'admin.users.edit';

    public function __construct(
        private readonly User $user
    ){}

    public function user(): User
    {
        return $this->user;
    }
}
