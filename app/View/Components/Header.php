<?php

namespace App\View\Components;

use App\Models\Brand;
use App\Models\Line;
use App\Models\Product;
use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Header extends Component
{
    public Collection $brands;
    public Collection $lines;
    public Collection $products;

    public function __construct()
    {
        $this->brands = Brand::query()->limit(4)->get();
        $this->lines = Line::query()->limit(4)->get();
        $this->products = Product::query()->limit(4)->orderBy('created_at', 'desc') ->get();
    }

    public function render(): View
    {
        return view('components.header.index');
    }
}
