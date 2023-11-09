<?php

namespace App\Actions\Product;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductStoreAction
{
    public function run(array $data): Product|null
    {
        $product = null;
        try {
            DB::beginTransaction();

            if(isset($data['image'])) {
                $data['image'] = Storage::put('/products', $data['image']);
            }

            $product = Product::create($data);

            if(isset($data['tags'])) {
                $product->tags()->sync($data['tags']);
                unset($data['tags']);
            }

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            if(isset($data['image'])) {
                Storage::delete($data['image']);
            }

            Log::error($e->getMessage());
        }

        return $product;
    }
}
