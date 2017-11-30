<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkGraphTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_time')->truncate();
        $faker = Faker\Factory::create();
        for($i = 1; $i <= 50; $i++){
            for ($j = 1;$j <=365;$j++){
                DB::table('work_time')->insert([
                    'time_open'=>$faker->time('H:i:s','12:00:00'),
                    'time_closed'=>$faker->time('H:i:s'),
                    'date'=>$faker->date(),
                    'is_open'=>rand(0,1),
                    'shop_id'=>$i,
                ]);
            }
        }
    }
}
