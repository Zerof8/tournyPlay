<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'first_name' => 'admin',
            'last_name' => 'tester',
            'email' => 'admin@test.com',
            'gender' => 1,
            'role_id' => 1,
            'date_of_birth' => '1995-01-01',
            'password' => Hash::make('password'),
            'email_verified_at' => now()->format('Y-m-d H:i:s'),
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'first_name' => 'employee',
            'last_name' => 'tester',
            'email' => 'employee@test.com',
            'gender' => 1,
            'role_id' => 2,
            'date_of_birth' => '1995-01-01',
            'password' => Hash::make('password'),
            'email_verified_at' => now()->format('Y-m-d H:i:s'),
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'first_name' => 'user',
            'last_name' => 'tester',
            'email' => 'user@test.com',
            'gender' => 1,
            'role_id' => 3,
            'date_of_birth' => '1995-01-01',
            'password' => Hash::make('password'),
            'email_verified_at' => now()->format('Y-m-d H:i:s'),
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
    }
}