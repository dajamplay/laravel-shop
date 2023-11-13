<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Feedback\FeedbackDestroyAction;
use App\Actions\Feedback\FeedbackStoreAction;
use App\Actions\Feedback\FeedbackUpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\FeedbackStoreRequest;
use App\Http\Requests\Feedback\FeedbackUpdateRequest;
use App\Models\Feedback;
use App\ViewModels\Admin\Feedback\FeedbackIndexViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FeedbackController extends Controller
{
    public function index(FeedbackIndexViewModel $viewModel): FeedbackIndexViewModel
    {
        return $viewModel->view('admin.feedback.index');
    }

    public function show(Feedback $feedback): View
    {
        return view('admin.feedback.show', compact('feedback'));
    }

    public function create(): View
    {
        return view('admin.feedback.create');
    }

    public function store(FeedbackStoreRequest $request, FeedbackStoreAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.feedback.index'))
            ->with('message', trans('custom.feedback.created'));
    }

    public function edit(Feedback $feedback): View
    {
        return view('admin.feedback.edit', compact('feedback'));
    }

    public function update(
        Feedback $feedback,
        FeedbackUpdateAction $action,
        FeedbackUpdateRequest $request
    ): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data, $feedback);

        return redirect(route('admin.feedback.show', $feedback->fresh()))
            ->with('message', trans('custom.feedback.updated'));
    }

    public function destroy(FeedbackDestroyAction $action, Feedback $feedback): RedirectResponse
    {
        $action->run($feedback);

        return redirect(route('admin.feedback.index'))
            ->with('message', trans('custom.feedback.deleted'));
    }
}
