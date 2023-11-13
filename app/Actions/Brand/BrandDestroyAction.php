<?php

namespace App\Actions\Brand;

use App\Exceptions\AdminPanelException;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BrandDestroyAction
{
    /**
     * @throws AdminPanelException
     */
    public function run(Brand $brand): void
    {
        $this->checkCanDelete($brand);

        try {
            DB::beginTransaction();

            $brand->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }

    /**
     * @throws AdminPanelException
     */
    public function checkCanDelete(Brand $brand): void
    {
        if($brand->products()->count() > 0) {
            throw new AdminPanelException(
                'Нельзя удалить ' . $brand->title . ', так как используется в товарах.'
            );
        }
    }
}
