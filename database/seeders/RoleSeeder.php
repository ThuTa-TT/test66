<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'CEO',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'DM',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'GM',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'AM',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Leader',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Sub-Leader',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Senior',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Junior',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ],
            [
                'name' => 'Support',
                'deleted_at' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
            ]
        ]);
    }
}
