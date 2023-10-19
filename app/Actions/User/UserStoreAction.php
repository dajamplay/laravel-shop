<?php

namespace App\Actions\User;

use App\Data\User\UserStoreData;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserStoreAction
{
    public function run(UserStoreData $data): User
    {
        $user = null;

        try {
            DB::beginTransaction();

            $user = User::create($data->toArray());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }

        return $user;
    }
}
