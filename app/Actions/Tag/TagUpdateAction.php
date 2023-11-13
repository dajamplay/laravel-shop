<?php

namespace App\Actions\Tag;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TagUpdateAction
{
    public function run(array $data, Tag $tag): void
    {
        try {
            DB::beginTransaction();

            if(isset($data['image'])) {
                $data['image'] = Storage::put('/tags', $data['image']);
            }

            $tag->update($data);

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
