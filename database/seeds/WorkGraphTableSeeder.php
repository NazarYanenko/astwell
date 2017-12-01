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
        for($i = 1; $i <= 10; $i++){
            for ($j = 1;$j <=365;$j++){
                DB::table('work_time')->insert([
                    'time_open'=>$faker->date('H:i:s', rand(25200,43200)),
//                    'time_open'=>$faker->time('H:i:s','12:00:00'),
//                    'time_closed'=>$faker->time('H:i:s'),
                    'time_closed'=>$faker->date('H:i:s', rand(64800,86400)),
//                    'date'=>$faker->date('Y-m-d','2018',''),
                    'date'=>$faker->dateTimeBetween($startDate = "now", $endDate = "360 days")->format('Y-m-d'),
                    'is_open'=>rand(0,1),
                    'shop_id'=>$i,
                ]);
            }
        }
    }
}
