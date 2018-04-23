<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity::class, function (Faker $faker) {
    $follows = \App\Models\Follow::pluck('id')->all();
    $tests = \App\Models\Test::pluck('id')->all();
    $users = \App\Models\User::pluck('id')->all();

    return [
        'activitable_id' => $faker->randomElement($follows, $tests),
        'activitable_type' => $faker->randomElement(['follow', 'test']),
        'action' => $faker->randomElement(['follow', 'unfollow', 'tested']),
        'user_id' => $faker->randomElement($users),
        'description' => $faker->text(100),
    ];
});
