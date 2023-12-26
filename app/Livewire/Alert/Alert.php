<?php

namespace App\Livewire\Alert;

use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Alert extends Component
{
    public string $message = '';

    public bool $isOpen = false;

    #[On('modal')]
    public function openModal(string $message): void
    {
        $this->message = $message;
        if ($this->message) $this->isOpen = true;
    }

    public function closeModal(): void
    {
        $this->isOpen = false;
    }

    public function render(): View
    {
        return view('livewire.alert.alert');
    }
}
