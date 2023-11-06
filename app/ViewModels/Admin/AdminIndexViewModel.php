<?php

namespace App\ViewModels\Admin;

use App\Models\Brand;
use App\Models\Line;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class AdminIndexViewModel extends ViewModel
{
    protected $view = 'admin.index';

    public function __construct()
    {
        //
    }

    public function products(): Collection
    {
        return Product::all();
    }

    public function brands(): Collection
    {
        return Brand::all();
    }

    public function lines(): Collection
    {
        return Line::all();
    }

    public function users(): Collection
    {
        return User::all();
    }
}
