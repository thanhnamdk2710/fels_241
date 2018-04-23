<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Question::class, function (Faker $faker) {
    $tests = \App\Models\Test::pluck('id')->all();

    return [
        'content' => $faker->text(200),
        'test_id' => $faker->randomElement($tests),
        'score' => rand(1, 2),
    ];
});
