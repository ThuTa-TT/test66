<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'emp_name' => 'Ag Ag' ,
                'emp_ph_no' => '09123456789',
                'emp_address' => 'Yangon',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Mg Mg',
                'emp_ph_no' => '091234567898',
                'emp_address' => 'Mandalay',
                'emp_pwd' =>  Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Soe Mg',
                'emp_ph_no' => '091234567876' ,
                'emp_address' =>  'Magway',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Mg Ag',
                'emp_ph_no' => '09123456787',
                'emp_address' => 'SaGai',
                'emp_pwd' =>  Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Soe Soe',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'Taung Gyi',
                'emp_pwd' =>  Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Hla Khyu',
                'emp_ph_no' => '0912345678',
                'emp_address' => 'HtaWel',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'EainDra',
                'emp_ph_no' => '0912345678',
                'emp_address' => 'NayPyiThaw',
                'emp_pwd' =>  Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Simon',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'Chouk',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Jenifer',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'Mon',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Biber',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'InnLay',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Akon',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'Chouk',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Ag Soe',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'Yangon',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Min Aung',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'NayPyiThaw',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Hlaing Aung',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'NayPyiThaw',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Ag Hlaing',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'NayPyiThaw',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Min Hlaing',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'NayPyiThaw',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Hlaing Ag',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'NayPyiThaw',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Ag Min',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'NayPyiThaw',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'emp_name' => 'Ag Hlaing',
                'emp_ph_no' => '09123456789',
                'emp_address' => 'NayPyiThaw',
                'emp_pwd' => Hash::make('password'),
                'flag' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
