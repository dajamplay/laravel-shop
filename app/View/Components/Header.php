<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
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

    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.header.index');
    }
}
