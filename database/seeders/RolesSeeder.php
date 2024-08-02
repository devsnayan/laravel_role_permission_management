<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = 
        [
            // Admins
            ['name' => 'super_admin', 'guard_name' => 'admin'],
            ['name' => 'super_editor', 'guard_name' => 'admin'],
            ['name' => 'super_viewer', 'guard_name' => 'admin'],

            // Users
            ['name' => 'user', 'guard_name' => 'web'],
            ['name' => 'user_editor', 'guard_name' => 'web'],
            ['name' => 'user_viewer', 'guard_name' => 'web'],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate($role);
        }
    
    }
}

