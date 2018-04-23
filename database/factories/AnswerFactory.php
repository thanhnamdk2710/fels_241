<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Answer::class, function (Faker $faker) {
    $questions = \App\Models\Question::pluck('id')->all();

    return [
        'content' => $faker->word(),
        'question_id' => $faker->randomElement($questions),
        'is_correct' => $faker->boolean(),
    ];
});
