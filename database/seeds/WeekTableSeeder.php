<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('week')->truncate();
        $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

        for($i = 0; $i < 7; $i++){
            DB::table('week')->insert([
                'name' =>$days[$i]
            ]);
        }

    }
}
