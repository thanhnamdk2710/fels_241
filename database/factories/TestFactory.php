<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Test::class, function (Faker $faker) {
    $lessons = \App\Models\Lesson::pluck('id')->all();

    return [
        'name' => $faker->sentence(4),
        'lesson_id' => $faker->randomElement($lessons),
        'score' => rand(10, 20),
        'type' => rand(1, 3),
    ];
});
