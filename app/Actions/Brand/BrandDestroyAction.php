<?php

namespace App\Actions\Brand;

use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BrandDestroyAction
{
    public function run(Brand $brand): void
    {
        try {
            DB::beginTransaction();

            $brand->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }
}
