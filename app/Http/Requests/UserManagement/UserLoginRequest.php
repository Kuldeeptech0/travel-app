<?php

namespace App\Http\Requests\UserManagement;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'login_email' => ['required', 'email'],
            'login_password' => ['required','string', Password::min(8)
                                        ->letters()
                                        ->mixedCase()
                                        ->numbers()
                                        ->symbols()
                        ],
        ];
    }
}
