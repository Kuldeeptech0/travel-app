<?php

namespace App\Providers\Auth;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\Auth\AuthenticationService;
use App\Http\Interfaces\Auth\AuthenticationInterface;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AuthenticationInterface::class, AuthenticationService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
