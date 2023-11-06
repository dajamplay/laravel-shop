<?php

namespace App\Actions\Product;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductUpdateAction
{
    public function run(array $data, Product $product): void
    {
        try {
            DB::beginTransaction();

            if(isset($data['file'])) {
                $data['image'] = Storage::put('/products', $data['file']);
                unset($data['file']);
            }

            $product->update($data);

            $tags = $data['tags'] ?? [];

            $product->tags()->sync($tags);

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
