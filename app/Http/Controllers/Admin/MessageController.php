<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Message\MessageShowAction;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\ViewModels\Admin\Message\MessageIndexViewModel;
use Illuminate\View\View;

class MessageController extends Controller
{
    public function index(MessageIndexViewModel $viewModel): MessageIndexViewModel
    {
        return $viewModel->view('admin.messages.index');
    }

    public function show(Message $message, MessageShowAction $action): View
    {
        $action->run($message);

        return view('admin.messages.show', compact('message'));
    }
}
