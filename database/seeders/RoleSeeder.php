<?php

namespace Database\Seeders;

use App\Models\Role;
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
            'id' => 1,
            'name' => 'admin',
            'description' => 'admin'
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'employee',
            'description' => 'employee'
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'user',
            'description' => 'user'
        ]);
    }
}
