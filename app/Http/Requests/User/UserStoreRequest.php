<?php

namespace App\Http\Requests\User;

use App\Data\User\UserStoreData;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelData\WithData;

class UserStoreRequest extends FormRequest
{
    use WithData;

    protected string $dataClass = UserStoreData::class;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:100', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'birthday' => ['nullable', 'string', 'date'],
            'role_id' => ['required', 'exists:roles,id'],
        ];
    }
}
