<?php

namespace App\Actions\Line;

use App\Models\Line;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LineStoreAction
{
    public function run(array $data): void
    {
        try {
            DB::beginTransaction();

            if(isset($data['image'])) {
                $data['image'] = Storage::put('/lines', $data['image']);
            }

            Line::create($data);

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
