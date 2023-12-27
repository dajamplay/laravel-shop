<?php

namespace App\View\Components\Admin;

use App\Models\Message;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public int $newMessagesCount;

    public function __construct(){}

    public function render(): View|Closure|string
    {
        $this->newMessagesCount = Message::all()->where('is_new', true)->count();

        return view('components.admin.sidebar.index', [
            'newMessagesCount' => $this->newMessagesCount
        ]);
    }
}

