<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the roles data
        $currentTimestamp = Carbon::now();
        $roles = [
            [
                'id' => '1',
                'name' => 'Admin',
                'description' => 'Responsible for CRUD operations',
                'management_level' => 0,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'id' => '2',
                'name' => 'First-Line Manager',
                'management_level' => 1,
                'description' => null,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'id' => '3',
                'name' => 'Middle-Line Manager',
                'management_level' => 2,
                'description' => null,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'id' => '5',
                'name' => 'Middle-Line Manager2',
                'management_level' => 2,
                'description' => null,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'id' => '4',
                'name' => 'Top-Level Manager',
                'management_level' => 3,
                'description' => null,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
        ];

        // Insert the roles into the database
        Role::insert($roles);
    }
}
