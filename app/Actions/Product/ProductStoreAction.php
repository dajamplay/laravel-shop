<?php

namespace App\Actions\Product;

use App\Data\Product\ProductStoreData;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductStoreAction
{
    public function run(ProductStoreData $data)
    {
        $product = null;

        try {
            DB::beginTransaction();

            $data->image = Storage::put('/products', $data->file);

            $product = Product::create($data->except('file')->toArray());

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Storage::delete($data->image);

            Log::error($e->getMessage());
        }

        return $product;
    }
}
