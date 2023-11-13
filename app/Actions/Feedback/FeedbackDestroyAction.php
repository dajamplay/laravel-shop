<?php

namespace App\Actions\Feedback;

use App\Models\Feedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FeedbackDestroyAction
{
    public function run(Feedback $feedback): void
    {

        try {
            DB::beginTransaction();

            $feedback->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }
}
