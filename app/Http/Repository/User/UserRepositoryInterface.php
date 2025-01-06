<?php

namespace App\Http\Repository\User;

interface UserRepositoryInterface
{
    public function createUser(array $userData);
    public function updateUser(array $userData);
}
