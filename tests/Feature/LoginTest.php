<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSuccessfulLogin()
    {
        $loginData = ['email' => 'whessel@example.com', 'password' => 'password'];

        $this->json('POST', 'api/auth/login', $loginData, ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
               "success",
               "data" => [
                   'token',
                   'name',
               ],
                "message"
            ]);

        $this->assertAuthenticated();
    }
}
