<?php

namespace App\ViewModels\Admin\Line;

use App\Data\LineData;
use Spatie\ViewModels\ViewModel;

class LineShowViewModel extends ViewModel
{
    protected $view = 'admin.lines.show';

    public function __construct(
        private readonly LineData $data
    ){}

    public function line(): LineData
    {
        return $this->data;
    }
}
