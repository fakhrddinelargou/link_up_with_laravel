<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:100', 'unique:users,username'],
            'firstname' => ['required', 'string', 'max:100'],
            'lastname'  => ['required', 'string', 'max:100'],
            'email'     => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password'  => ['required', Password::defaults()],
            'bio'       => ['nullable', 'string', 'max:800'],
            'image'     => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ];
    }
}
