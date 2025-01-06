<?php

namespace App\Http\Services\Auth;

use App\Http\DTO\Auth\UserRegisterDTO;
use App\Http\Interfaces\Auth\AuthenticationInterface;
use App\Http\Repository\User\UserRepositoryInterface;


class AuthenticationService implements AuthenticationInterface
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function userRegistration(UserRegisterDTO $data){
        return $this->userRepository->createUser($data->toArray());
    }

    public function adminRegisterUser(array $userData){}

    public function login(array $credentials){}

    public function logout(){}

    public function forgotPassword(string $email){}

    public function resetPassword(array $data){}

}
