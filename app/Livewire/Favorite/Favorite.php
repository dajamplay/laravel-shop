<?php

namespace App\Livewire\Favorite;

use Illuminate\View\View;
use Livewire\Component;

class Favorite extends Component
{
    public function mount(): void
    {
        //
    }

    public function render(): View
    {
        return view('livewire.favorite.favorite');
    }
}
