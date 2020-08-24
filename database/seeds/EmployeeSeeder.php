<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'id' => '1',
            'company_id' => '1',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@gmail.com',
            'phone' => '09062068771',
        ]);

        DB::table('employees')->insert([
            'id' => '2',
            'company_id' => '1',
            'first_name' => 'Aaron',
            'last_name' => 'Carter',
            'email' => 'aaron@gmail.com',
            'phone' => '09085053284',
        ]);
    }
}
