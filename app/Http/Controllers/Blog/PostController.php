<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return 'posts';
    }

    public function show()
    {
        return 'show post';
    }
}
