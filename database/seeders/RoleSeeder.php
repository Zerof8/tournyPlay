<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Store the roles in an array
        $roles = [
            [
                'id' => 1,
                'name' => 'admin',
                'description' => 'Administrator',
            ],
            [
                'id' => 2,
                'name' => 'employee',
                'description' => 'Employee',
            ],
            [
                'id' => 3,
                'name' => 'user',
                'description' => 'User',
            ],
        ];
        // Insert the roles into the database
        Role::insert($roles);
    }
}
