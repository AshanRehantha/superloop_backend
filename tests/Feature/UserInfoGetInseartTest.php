<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserInfoGetInseartTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserInfoInseartSuccessfully()
    {
        $payload = ['first_name' => 'whessel@example.com', 'last_name' => 'password', 'age' => 25, 'dob' => "1990-06-30", 'email' => "iashanrehantha@gmail.com"];

        $this->json('POST', 'api/user/create', $payload, ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
               "success",
               "data" => [
            ],
               "message"
            ]);
    }
}
