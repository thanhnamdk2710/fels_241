<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Result::class, function (Faker $faker) {
    $users = \App\Models\User::pluck('id')->all();
    $tests = \App\Models\Test::pluck('id')->all();

    return [
        'test_id' => $faker->randomElement($tests),
        'user_id' => $faker->randomElement($users),
        'score' => rand(10, 20),
        'status' => $faker->boolean,
        'rank' => $faker->unique()->numberBetween(1, 100),
    ];
});
