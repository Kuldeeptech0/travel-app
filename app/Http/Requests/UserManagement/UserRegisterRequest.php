<?php

namespace App\Http\Requests\UserManagement;

use Illuminate\Validation\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'first_name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','string', Password::min(8)
                                        ->letters()
                                        ->mixedCase()
                                        ->numbers()
                                        ->symbols()
                                        ->uncompromised(5)
                        ],
        ];
    }

    public function after(): array{
        return [
            function (Validator $validator) {
               $validator->errors()->merge([
                    'register_form' => 'active',
                    'registration_failed' => 'Registration failed. Please try again.'
                ]);
            },
        ];
    }
}
