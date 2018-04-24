<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Course::class, function (Faker $faker) {
    $name = $faker->sentence(2);
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'image' => 'course.png',
        'level_completed' => rand(1, 3),
    ];
});
