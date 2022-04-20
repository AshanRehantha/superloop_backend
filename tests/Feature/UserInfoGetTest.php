<?php

namespace Tests\Feature;

use App\UserInfo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserInfoGetTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserInfoGetSuccessfully()
    {
        $this->json('GET', 'api/user/all', [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5NjFiMWIzYy1hMDU1LTQ5OGYtOWI2MS05ZjZkM2Q5MGVkMTUiLCJqdGkiOiJlNjZjMDlhYjQwNmNhMGZjNDUwM2IxNGYzODViNmYyNjVkM2EyNDJkNjE5Nzg3NzZlNmU1OGI2ZjUzMmM1MmM1NjhjNDE0ZDBiZGI2NDk1MyIsImlhdCI6MTY1MDQzMjU3Ny4yNjc4MzUsIm5iZiI6MTY1MDQzMjU3Ny4yNjc4NCwiZXhwIjoxNjgxOTY4NTc3LjE0MzQ0Miwic3ViIjoiMSIsInNjb3BlcyI6W119.2yEySip3CCxPkU49968KDt5cYSH0XiYu8Cs3M-TTN8Msu4k_ReII5lwdkNNH0a7AJYaWSQe45iRCuT1z_iHQGkMOtdVKsQsgsX4wSGTGMbZB_hRY4nY6nMMRFKhql090O0C-rnnElnJvpJUDQsXnDP4ZSfNKlOMV7uwAzzlD0ZTkMB27rhb2HZ6o2kNNQyh-ey9XyX9a-zyCMRL8TqekScskIs6xbv1ktGCCR2X3lO-xWmn0H_eV-QuMPThng-cZnkyR_VH3HIUO6en__ejJcamKLEtht5tmlth0NXHy2qYJ8BaA-9FaPF1A82Oi7hJfHwlRzon7u1ylV1M_VqINVSBhIDZFBnTZK4TfIsOcPJg9zSs_GLi0DrOi7UYvE_g94-9Wg0SlOR4cM8x6v4IWXM7dfQ_mKDuz1OUj4frV3xTaTGs2jFVJRnyePHuYEy6E0JoleGePR8e29Xxp0kNH4_oprXz9pfPKf95jLD-Pv5rjaWcw3siAy1zqBjUCOcDeYoBxDsdLvR8rlf4FhXRXCibH8gSkEMoV_TmZXrahtXFYq8hsBwIdzjsdTwk_yMlZ2VDnOiHhkVAiUBD6TgybWtYHAtrGp28yHvssoo_7TwEtRlwXNN2RrCg_ETYKmPwVIGCtF4l3ND8JKPF38lpzUQXg9EUXwB9vDZMP7P6GmFk'
            ])
            ->assertStatus(200)
            ->assertJson([
                "data" => [
                    "id" => 2,
                    "first_name" => "Susan Wojcicki",
                    "last_name" => "YouTube",
                    "age" => "2014",
                    "dob" => "San Bruno, California",
                    "email" => "Video-sharing platform"
                ],
                "message" => "User retrieved successfully"
            ]);
    }
}
