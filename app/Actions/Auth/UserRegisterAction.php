<?php

namespace App\Actions\Auth;

use App\Actions\User\UserStoreAction;
use App\Services\AuthService;

class UserRegisterAction
{
    public function __construct(
        private readonly UserStoreAction $action,
        private readonly AuthService $service
    ){}

    public function run(array $data, string $guard): void
    {
        $user = $this->action->run($data);

        if ($user) {
            $this->service->addRegisteredEvent($user);
            $this->service->auth($user, $guard);
        }
    }
}
