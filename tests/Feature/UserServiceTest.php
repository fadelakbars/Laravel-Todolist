<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\UserService;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserServiceTest extends TestCase
{
    private UserService $userservice;

    public function setUp(): void {
        parent::setUp();

        $this->userservice = $this->app->make(UserService::class);
    }

    public function tesSample() {
        self::assertTrue(True);
    }
}
