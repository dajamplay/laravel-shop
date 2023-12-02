<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('pages.blog.posts.index');
    }

    public function show(Post $post): View
    {
        return view('pages.blog.posts.show', compact('post'));
    }
}
