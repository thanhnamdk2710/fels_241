<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Word::class, function (Faker $faker) {
    $lessons = \App\Models\Lesson::pluck('id')->all();

    return [
        'name' => $faker->word(),
        'content' => $faker->text(200),
        'lesson_id' => $faker->randomElement($lessons),
    ];
});
