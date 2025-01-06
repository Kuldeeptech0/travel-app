<?php

namespace App\Http\Repository\User;

use App\Models\UserManagement\User;

class UserRepository implements UserRepositoryInterface
{
    public function createUser(array $userData){
        return User::create($userData);
    }

    public function updateUser(array $userData){}
}
