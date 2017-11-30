<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        $faker = Faker\Factory::create();
        for($i = 0; $i < 50; $i++){
            DB::table('admins')->insert([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->password())
            ]);
        }
    }
}
