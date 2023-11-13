<?php

namespace App\Actions\Tag;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TagDestroyAction
{
    public function run(Tag $tag): void
    {
        try {
            DB::beginTransaction();

            $tag->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }
}
