<?php

namespace App\ViewModels\Admin\Setting;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class SettingIndexViewModel extends ViewModel
{
    public function __construct(){}

    public function shippings(): Collection
    {
        return Setting::query()
            ->where('key', 'like', '%shipping%')
            ->get();
    }
}
