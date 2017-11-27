<?php

use Illuminate\Database\Seeder;

class WeekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

        for($i = 0; $i < 7; $i++){
            DB::table('week')->insert([
                'name' =>$days[$i]
            ]);
        }

    }
}
