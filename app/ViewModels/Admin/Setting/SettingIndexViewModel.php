<?php

namespace App\ViewModels\Admin\Setting;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class SettingIndexViewModel extends ViewModel
{
    public function __construct(){}

    public function settings(): Collection
    {
        return Setting::query()->get();
    }
}
