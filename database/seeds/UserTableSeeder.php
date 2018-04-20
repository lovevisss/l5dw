<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // User::truncate();
        foreach (range(1,10) as $index) 
        {
        	
			User::create([
        		'name' => $faker->name(),
        		'email' => $faker->email(),
        		'address' => $faker->address(),
        		'password' => '123456',
        		
        		// 'password' => Hash::make('tutsplus'),
        	]);
   		}
    }
}