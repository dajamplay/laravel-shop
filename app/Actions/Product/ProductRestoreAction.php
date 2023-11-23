<?php

namespace App\Actions\Product;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductRestoreAction
{
    public function run(string $id): bool
    {
        try {
            DB::beginTransaction();

            $product = Product::withTrashed()->find($id);

            $product->brand()->restore();

            $product->restore();

            DB::commit();

            return true;

        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }

        return false;
    }
}
