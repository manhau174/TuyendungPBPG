<?php

use Illuminate\Database\Seeder;
use App\users;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();
        for ($i=10; $i < 20 ; $i++) { 
        	DB::table('users')->insert([
        		'name' => $faker->name,
		        'email' => $faker->unique()->safeEmail,
		        'password' => bcrypt('secret'),
		        'gender' => $faker->biasedNumberBetween($min=0,$max=1),
		        'remember_token' => str_random(10),
		        'address' => $faker->address,
		        'mobile' => $faker->tollFreePhoneNumber(),
		        'city_id' => $faker->biasedNumberBetween($min=0,$max=200),
		        'avatar'	=> $faker->image,
		        'permission' => $faker->biasedNumberBetween($min=0,$max=1),
                'birthday' => $faker->time,
         
        	]);
        }
        }
    }

