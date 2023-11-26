<?php

namespace App\Actions\Setting;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SettingUpdateAction
{
    private string $key = '';

    public function run(array $data): string
    {
        try {
            DB::beginTransaction();

            foreach ($data as $key => $value) {

                if(empty($value)) $this->key = $key;

                $setting = Setting::query()->where('key', '=', $key)->first();

                $setting->value = $value;

                $setting->save();
            }

            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());
        }

        return $this->key;
    }
}
