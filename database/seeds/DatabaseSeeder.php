<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(WordsTableSeeder::class);
        $this->call(FollowsTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(ResultsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(LessonUserTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
    }
}
