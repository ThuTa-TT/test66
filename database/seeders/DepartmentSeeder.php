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
            'deleted_at' => null,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Sale Department',
            'deleted_at' => null,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Doc Department',
            'deleted_at' => null,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Development Department',
            'deleted_at' => null,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Contract Department',
            'deleted_at' => null,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Infra Department',
            'deleted_at' => null,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'Testing Department',
            'deleted_at' => null,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'dep_name' => 'SST Department',
            'deleted_at' => null,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
       ]);
    }
}
