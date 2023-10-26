<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        seo()->description = 'Тестовое описание';
        seo()->title = 'Тестовый заголовок';

        return view('home.index');
    }
}
