<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privileges')->insert([
            'id' => 1,
            'name' => 'Marketing',
            'description' => 'M department'
        ]);
        DB::table('privileges')->insert([
            'id' => 2,
            'name' => 'support',
            'description' => 's department'
        ]);
    }
}
