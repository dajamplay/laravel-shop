<?php

namespace App\Actions\Slide;

use App\Models\Slide;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SlideDestroyAction
{
    public function run(Slide $slide): void
    {
        try {
            DB::beginTransaction();

            $slide->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }
}
