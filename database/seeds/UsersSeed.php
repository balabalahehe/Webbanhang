<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker\Factory::create();
        for($i = 0; $i < 10; $i++){
            DB::table('users')->insert([
                'fullname' => $faker->unique()->name, 
                'email' => $faker->unique()->email, 
                'password' => bcrypt('12345678'), 
                'phonenumber' => $faker->phoneNumber, 
                'hash' => Str::uuid(),
            ]);
        }
    }
}
