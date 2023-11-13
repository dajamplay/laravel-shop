<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class AdminPanelException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct();
        $this->message = $message;
    }

    public function render(): RedirectResponse
    {
        return redirect()->back()->with('message-error', $this->message);
    }

    public function report(): void
    {
        Log::error($this->message);
    }
}
