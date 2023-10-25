<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Services\Seo\Seo;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        Seo::setTitle('New title');
        return view('public.home.index');
    }
}
