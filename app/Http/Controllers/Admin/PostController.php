<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ViewModels\Admin\Post\PostIndexViewModel;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(PostIndexViewModel $viewModel): PostIndexViewModel
    {
        return $viewModel->view('admin.posts.index');
    }
}
