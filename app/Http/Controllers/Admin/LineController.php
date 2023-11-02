<?php

namespace App\Http\Controllers\Admin;

use App\Data\LineData;
use App\Http\Controllers\Controller;
use App\Models\Line;
use App\ViewModels\Admin\Line\LineIndexViewModel;
use App\ViewModels\Admin\Line\LineShowViewModel;

class LineController extends Controller
{
    public function index(LineIndexViewModel $viewModel): LineIndexViewModel
    {
        return $viewModel;
    }

    public function show(Line $line): LineShowViewModel
    {
        $data = LineData::from($line);

        return new LineShowViewModel($data);
    }
}
