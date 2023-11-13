<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Slide\SlideDestroyAction;
use App\Actions\Slide\SlideStoreAction;
use App\Actions\Slide\SlideUpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slide\SlideStoreRequest;
use App\Http\Requests\Slide\SlideUpdateRequest;
use App\Models\Slide;
use App\ViewModels\Admin\Slide\SlideIndexViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SlideController extends Controller
{
    public function index(SlideIndexViewModel $viewModel): SlideIndexViewModel
    {
        return $viewModel->view('admin.slides.index');
    }

    public function show(Slide $slide): View
    {
        return view('admin.slides.show', compact('slide'));
    }

    public function create(): View
    {
        return view('admin.slides.create');
    }

    public function store(SlideStoreRequest $request, SlideStoreAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.slides.index'))
            ->with('message', trans('custom.slides.created'));
    }

    public function edit(Slide $slide): View
    {
        return view('admin.slides.edit', compact('slide'));
    }

    public function update(
        Slide               $slide,
        SlideUpdateAction   $action,
        SlideUpdateRequest $request
    ): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data, $slide);

        return redirect(route('admin.slides.show', $slide->fresh()))
            ->with('message', trans('custom.slides.updated'));
    }

    public function destroy(SlideDestroyAction $action, Slide $slide): RedirectResponse
    {
        $action->run($slide);

        return redirect(route('admin.slides.index'))
            ->with('message', trans('custom.slides.deleted'));
    }
}
