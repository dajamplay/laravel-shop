<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Line\LineDestroyAction;
use App\Actions\Line\LineStoreAction;
use App\Actions\Line\LineUpdateAction;
use App\Exceptions\AdminPanelException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Line\LineStoreRequest;
use App\Http\Requests\Line\LineUpdateRequest;
use App\Models\Line;
use App\ViewModels\Admin\Line\LineIndexViewModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LineController extends Controller
{
    public function index(LineIndexViewModel $viewModel): LineIndexViewModel
    {
        return $viewModel->view('admin.lines.index');
    }

    public function show(Line $line): View
    {
        return view('admin.lines.show', compact('line'));
    }

    public function create(): View
    {
        return view('admin.lines.create');
    }

    public function store(LineStoreRequest $request, LineStoreAction $action): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data);

        return redirect(route('admin.lines.index'))
            ->with('message', trans('custom.lines.created'));
    }

    public function edit(Line $line): View
    {
        return view('admin.lines.edit', compact('line'));
    }

    public function update(
        Line $line,
        LineUpdateAction $action,
        LineUpdateRequest $request
    ): RedirectResponse
    {
        $data = $request->validated();

        $action->run($data, $line);

        return redirect(route('admin.lines.show', $line->fresh()))
            ->with('message', trans('custom.lines.updated'));
    }

    /**
     * @throws AdminPanelException
     */
    public function destroy(LineDestroyAction $action, Line $line): RedirectResponse
    {
        $action->run($line);

        return redirect()->back()->with('message', trans('custom.lines.deleted'));
    }
}
