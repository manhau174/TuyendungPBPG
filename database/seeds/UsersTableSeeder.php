<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        static $password;
        $faker = Faker\Factory::create();

        for ($i=0; $i < 10 ; $i++) { 
            $user = new User();

            $user->name = $faker->name;
            $user->slug = str_slug($user->name);
            $user->email = $faker->unique()->safeEmail;
            $user->password = $password ?: $password = bcrypt('secret');
            $user->permission = $faker->biasedNumberBetween($min=1,$max=2);
            $user->remember_token = str_random(10);
            $user->save();
        }
    }
}
