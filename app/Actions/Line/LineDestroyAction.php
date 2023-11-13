<?php

namespace App\Actions\Line;

use App\Exceptions\AdminPanelException;
use App\Models\Line;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LineDestroyAction
{
    /**
     * @throws AdminPanelException
     */
    public function run(Line $line): void
    {
        $this->checkCanDelete($line);

        try {
            DB::beginTransaction();

            $line->delete();

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }
    }

    /**
     * @throws AdminPanelException
     */
    public function checkCanDelete(Line $line): void
    {
        if($line->products()->count() > 0) {
            throw new AdminPanelException(
                'Нельзя удалить ' . $line->title . ', так как используется в товарах.'
            );
        }
    }
}
