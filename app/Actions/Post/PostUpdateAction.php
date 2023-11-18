<?php

namespace App\Actions\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PostUpdateAction
{
    public function run(array $data, Post $post): void
    {
        try {
            DB::beginTransaction();

            if(isset($data['image'])) {
                $data['image'] = Storage::put('/posts', $data['image']);
            }

            $post->update($data);

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            if(isset($data['image'])) {
                Storage::delete($data['image']);
            }

            Log::error($e->getMessage());
        }
    }
}
