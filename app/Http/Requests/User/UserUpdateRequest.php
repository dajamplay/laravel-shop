<?php

namespace App\Http\Requests\User;

use App\Data\User\UserUpdateData;
use Illuminate\Foundation\Http\FormRequest;
use Spatie\LaravelData\WithData;

class UserUpdateRequest extends FormRequest
{
    use WithData;

    protected string $dataClass = UserUpdateData::class;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:50', 'min:3'],
            'last_name' => ['required', 'string', 'max:50', 'min:3'],
            "birthday" => ['nullable', 'string', 'date']
        ];
    }
}
