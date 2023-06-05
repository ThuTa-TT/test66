<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('departments')->insert([
        [
            'dep_name' => 'Admin Department',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Sale Department',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Doc Department',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Development Department',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Contract Department',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Infra Department',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Testing Department',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'SST Department',
            'flag' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
       ]);
    }
}
