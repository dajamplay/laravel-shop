<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Post\PostStoreAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostStoreRequest;
use App\Models\Post;
use App\ViewModels\Admin\Post\PostIndexViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(PostIndexViewModel $viewModel): PostIndexViewModel
    {
        return $viewModel->view('admin.posts.index');
    }

    public function show(Post $post): View
    {
        return view('admin.posts.show', compact('post'));
    }

    public function create(): View
    {
        return view('admin.posts.create');
    }

    public function store(PostStoreRequest $request, PostStoreAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.posts.index'))
            ->with('message', trans('custom.posts.created'));
    }

    public function edit(Post $post): View
    {
        return view('admin.posts.edit', compact('post'));
    }
}
