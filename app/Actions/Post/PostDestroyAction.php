<?php

namespace App\Actions\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostDestroyAction
{
    public function run(Post $post): void
    {
        try {
            DB::beginTransaction();

            $post->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }
}
