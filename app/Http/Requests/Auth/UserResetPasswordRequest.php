<?php

namespace App\Http\Requests\Auth;

use App\Data\Auth\UserResetPasswordData;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelData\WithData;

class UserResetPasswordRequest extends FormRequest
{
    use WithData;

    protected string $dataClass = UserResetPasswordData::class;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:3'],
            'password_confirmation' => ['required', 'min:3'],
        ];
    }
}
