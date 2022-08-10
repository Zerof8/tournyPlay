<?php

namespace Database\Seeders;

use App\Models\Privilege;
use Illuminate\Database\Seeder;
class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //store the privileges in an array
        $privileges = [
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

        //insert the privileges into the database
        Privilege::insert($privileges);
    }
}
