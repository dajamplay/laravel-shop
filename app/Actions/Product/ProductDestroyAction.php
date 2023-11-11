<?php

namespace App\Actions\Product;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductDestroyAction
{
    public function run(Product $product): void
    {
        try {
            DB::beginTransaction();

            $product->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }
}
