<?php

namespace App\Http\Interfaces\Auth;

use App\Http\DTO\Auth\UserRegisterDTO;

interface AuthenticationInterface
{
    public function userRegistration(UserRegisterDTO $userData);
    public function adminRegisterUser(array $userData);
    public function login(array $credentials);
    public function logout();
    public function forgotPassword(string $email);
    public function resetPassword(array $data);
}
