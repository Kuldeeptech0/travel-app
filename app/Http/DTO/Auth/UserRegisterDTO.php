<?php

namespace App\Http\DTO\Auth;

use App\Http\Requests\UserManagement\UserRegisterRequest;

class UserRegisterDTO
{

    public function __construct(
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly string $email,
        public readonly string $password,
    )
    {
        //
    }


    public static function fromRequest(UserRegisterRequest $request): self
    {
        return new self(
            firstName: $request->validated('first_name'),
            lastName: $request->validated('last_name'),
            email: $request->validated('email'),
            password: $request->validated('password'),
        );
    }

    public function toArray(): array
    {
        return [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }

}
