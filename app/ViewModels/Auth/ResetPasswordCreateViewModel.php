<?php

namespace App\ViewModels\Auth;

use App\Data\Auth\UserResetPasswordFromEmailData;
use Spatie\ViewModels\ViewModel;

class ResetPasswordCreateViewModel extends ViewModel
{
    protected $view = 'auth.reset-password';

    public function __construct(
        private readonly UserResetPasswordFromEmailData $data
    ){}

    public function token(): string
    {
        return $this->data->token;
    }

    public function email(): string
    {
        return $this->data->email;
    }
}
