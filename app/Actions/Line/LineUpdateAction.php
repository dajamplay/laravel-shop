<?php

namespace App\Actions\Line;

use App\Models\Line;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LineUpdateAction
{
    public function run(array $data, Line $line): void
    {
        try {
            DB::beginTransaction();

            if(isset($data['image'])) {
                $data['image'] = Storage::put('/lines', $data['image']);
            }

            $line->update($data);

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
