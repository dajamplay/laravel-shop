<?php

namespace App\Actions\User;

use App\Data\User\UserUpdateData;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserUpdateAction
{
    public function run(UserUpdateData $data, User $user): void
    {
        try {
            DB::beginTransaction();

            $user->query()->update($data->toArray());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }
}
