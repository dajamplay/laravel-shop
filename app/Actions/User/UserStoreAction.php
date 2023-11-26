<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserStoreAction
{
    private User|null $user = null;

    public function run(array $data): User|null
    {
        try {
            DB::beginTransaction();

            $this->user = User::create($data);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }

        return $this->user;
    }
}
