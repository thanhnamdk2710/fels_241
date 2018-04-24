<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LessonUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $lessons = \App\Models\Lesson::pluck('id')->all();
        $users = \App\Models\Lesson::pluck('id')->all();

        for ($i = 1; $i < 20; $i++) {
            DB::table('lesson_user')->insert([
                'user_id' => $faker->randomElement($users),
                'lesson_id' => $faker->randomElement($lessons),
            ]);
        }
    }
}
