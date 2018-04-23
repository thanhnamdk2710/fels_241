<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $roles = \App\Models\Role::pluck('id')->all();
        $users = \App\Models\Lesson::pluck('id')->all();

        for ($i = 1; $i < 40; $i++) {
            DB::table('role_user')->insert([
                'role_id' => $faker->randomElement($roles),
                'user_id' => $faker->randomElement($users),
            ]);
        }
    }
}
