<?php

namespace App\Actions\Auth;

use App\Actions\User\UserStoreAction;
use App\Data\User\UserStoreData;
use App\Services\AuthService;

class UserRegisterAction
{
    public function __construct(
        private readonly UserStoreAction $action,
        private readonly AuthService $service
    ){}

    public function run(UserStoreData $data, string $guard): void
    {
        $user = $this->action->run($data);

        $this->service->addRegisteredEvent($user);

        $this->service->auth($user, $guard);
    }
}
