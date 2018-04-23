<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Follow::class, function (Faker $faker) {
    $users = \App\Models\User::pluck('id')->all();

    return [
        'name' => $faker->name,
        'user_id' => $faker->randomElement($users),
        'follower_id' => $faker->randomElement($users),
    ];
});
