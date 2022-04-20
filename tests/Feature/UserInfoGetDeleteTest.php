<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserInfoGetDeleteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserInfoDeleteSuccessfully()
    {
        $this->json('POST', 'api/user/user/delete/1', ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
               "success",
               "data",
               "message"
            ]);
    }
}
