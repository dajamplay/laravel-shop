<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Tag\TagDestroyAction;
use App\Actions\Tag\TagStoreAction;
use App\Actions\Tag\TagUpdateAction;
use App\Data\TagData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\TagStoreRequest;
use App\Http\Requests\Tag\TagUpdateRequest;
use App\Models\Tag;
use App\ViewModels\Admin\Tag\TagIndexViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TagController extends Controller
{
    public function index(TagIndexViewModel $viewModel): TagIndexViewModel
    {
        return $viewModel->view('admin.tags.index');
    }

    public function show(Tag $tag): View
    {
        return view('admin.tags.show', compact('tag'));
    }

    public function create(): View
    {
        return view('admin.tags.create');
    }

    public function store(TagStoreRequest $request, TagStoreAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.tags.index'))
            ->with('message', trans('custom.tags.created'));
    }

    public function edit(Tag $tag): View
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(
        Tag $tag,
        TagUpdateAction $action,
        TagUpdateRequest $request
    ): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data, $tag);

        return redirect(route('admin.tags.show', $tag->fresh()))
            ->with('message', trans('custom.tags.updated'));
    }

    public function destroy(TagDestroyAction $action, Tag $tag): RedirectResponse
    {
        $action->run($tag);

        return redirect(route('admin.tags.index'))
            ->with('message', trans('custom.tags.deleted'));
    }
}
