<?php

namespace App\View\Components;

use App\Models\Brand;
use App\Models\Line;
use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Header extends Component
{
    public array $phones = [
        '+7(911)940-66-95',
        '+7(911)744-78-88',
    ];

    public string $saleText = '25% Скидки на всю косметику в декабре';

    public array $menu = [
        [
            'title' => '',
            'link' => ''
        ]
    ];

    public Collection $brands;
    public Collection $lines;
    public Collection $products;

    public function __construct()
    {
        $this->brands = Brand::query()->limit(4)->get();
        $this->lines = Line::query()->limit(4)->get();
        $this->products = Product::query()->limit(4)->orderBy('created_at', 'desc') ->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.header.index');
    }
}
