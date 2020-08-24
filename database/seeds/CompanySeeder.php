<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => '1',
            'name' => 'TapServices Inc',
            'email' => 'admin@value-exch.com',
            'logo' => 'http://127.0.0.1:51373/browser/#',
            'website' => 'https://www.value-exch.com/en',
        ]);
    }
}
