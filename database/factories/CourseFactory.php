<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Course::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'level_completed' => rand(5, 6),
    ];
});
