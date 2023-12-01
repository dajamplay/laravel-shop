<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Message\MessageStoreRequest;
use Illuminate\Http\RedirectResponse;

class MessageController extends Controller
{
    public function store(MessageStoreRequest $request): RedirectResponse
    {
        return back()->with(['message' => $request->validated()['message']]);
    }
}
