<?php

namespace App\Providers;

use App\Services\UserService;
use App\Services\Imp\UserServiceImp;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class UserServiceProvider extends ServiceProvider implements DeferrableProvider
{

    public array $singletons = [
        UserService::class => UserServiceImp::class
    ];

    public function provides(): array {
        return [UserService::class];
    }
}
