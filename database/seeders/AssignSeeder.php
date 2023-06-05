<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AssignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numEntries = 100;

        for ($i = 0; $i < $numEntries; $i++) {

            $year = rand(2022, 2023);
            $month = rand(1, 12);
            $day = rand(1, 31);

            $date = Carbon::create($year,$month ,$day , 0, 0, 0);

            DB::table('assigns')->insert([
                [
                    'emp_id' => rand(1,19),
                    'title' => Str::random(10),
                    'start_date' =>  $date->format('Y-m-d'),
                    'end_date' => $date->addWeeks(rand(1, 10))->format('Y-m-d'),
                    'progress' => rand(1,100),
                    'flag' => 1,
                    'created_by' => 1,
                    'updated_by' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            ]);  
        }    
    }
}
