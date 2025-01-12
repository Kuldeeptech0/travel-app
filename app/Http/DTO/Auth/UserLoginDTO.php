<?php

namespace App\Http\DTO\Auth;

use App\Http\Requests\UserManagement\UserLoginRequest;

class UserLoginDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public readonly string $email,
        public readonly string $password
    )
    {}

    public static function fromRequest(UserLoginRequest $request): self{
        return new self(
            email: $request->validated('login_email'),
            password: $request->validated('login_password')
        );
    }

    public function toArray(): array{
        return [
            'email' => $this->email,
            'password' => $this->password
        ];
    }
}
