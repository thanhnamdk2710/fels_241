<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Lesson::class, function (Faker $faker) {
    $courses = \App\Models\Course::pluck('id')->all();
    $name = $faker->sentence(5);

    return [
        'name' => $name,
        'slug' => str_slug($name),
        'image' => 'lesson.png',
        'course_id' => $faker->randomElement($courses),
    ];
});
