<?php

namespace App\Livewire\Contacts;

use App\Livewire\ThrottlingTrait;
use App\Models\Message;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    use ThrottlingTrait;

    #[Validate(['required', 'string', 'min:2'])]
    public string $first_name = '';

    #[Validate(['required', 'string', 'min:2'])]
    public string $last_name = '';

    #[Validate(['required', 'email', 'min:2'])]
    public string $email = '';

    #[Validate(['required', 'string', 'min:2'])]
    public string $phone = '';

    #[Validate(['required', 'string', 'min:2'])]
    public string $message = '';

    /**
     * @throws ValidationException
     */
    public function submit(): void
    {
        $this->rateLimit(20, function () {
            $this->dispatch('modal', 'Слишком много запросов. Попробуйте через 1 минуту.');
        });
        $this->validate();
        $this->createMessage();
        $this->dispatch('modal', 'Спасибо! Ваше сообщение отправлено.');
        $this->clearFields();
    }

    public function createMessage(): void
    {
        Message::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);
    }

    public function clearFields(): void
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }

    public function render(): View
    {
        return view('livewire.contacts.contact-form');
    }
}
