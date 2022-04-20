<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserInfo;
use Faker\Generator as Faker;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        'first_name' => $this->faker->name(),
        'last_name' => $this->faker->lastName(),
        'age' => 25,
        'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'email' => $this->faker->unique()->safeEmail(),
    ];
});
