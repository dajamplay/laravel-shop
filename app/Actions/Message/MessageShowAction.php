<?php

namespace App\Actions\Message;

use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MessageShowAction
{
    public function run(Message $message): void
    {
        try {
            DB::beginTransaction();

            if($message->is_new) {
                $message->is_new = false;

                $message->save();
            }

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }
}
