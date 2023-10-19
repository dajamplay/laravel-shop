<?php

namespace App\Http\Requests\Auth;

use App\Data\Auth\UserLoginData;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelData\WithData;

class UserLoginRequest extends FormRequest
{
    use WithData;

    protected string $dataClass = UserLoginData::class;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'max:100', 'email'],
            'password' => ['required', 'string', 'min:3'],
            'remember' => ['boolean']
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'remember' => $this->boolean('remember')
        ]);
    }
}
