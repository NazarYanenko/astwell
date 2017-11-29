<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->truncate();
        $faker = Faker\Factory::create();
        for($i = 0; $i < 50; $i++){
            DB::table('shops')->insert([
                'name' => $faker->company
            ]);
        }
    }
}
