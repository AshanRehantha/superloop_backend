<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserInfoGetUpdateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserInfoUpdateSuccessfully()
    {

        $this->json('POST', 'api/user/update/1/Rehantha', ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
               "success",
               "data",
               "message"
            ]);
    }
}
