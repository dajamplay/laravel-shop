<?php

namespace App\Http\Requests\Auth;

use App\Data\Auth\UserResetPasswordFromEmailData;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelData\WithData;

class UserResetPasswordFromEmailRequest extends FormRequest
{
    use WithData;

    protected string $dataClass = UserResetPasswordFromEmailData::class;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'token' => ['required'],
            'email' => ['required', 'email'],
        ];
    }
}
