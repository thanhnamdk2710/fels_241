<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Lesson::class, function (Faker $faker) {
    $courses = \App\Models\Course::pluck('id')->all();

    return [
        'name' => $faker->sentence(2),
        'course_id' => $faker->randomElement($courses),
    ];
});
