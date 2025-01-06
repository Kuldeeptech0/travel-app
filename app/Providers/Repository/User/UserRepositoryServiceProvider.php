<?php

namespace App\Providers\Repository\User;



use Illuminate\Support\ServiceProvider;
use App\Http\Repository\User\UserRepository;
use App\Http\Repository\User\UserRepositoryInterface;

class UserRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
