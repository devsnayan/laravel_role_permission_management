<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // student Permission for Admin
            ['name' => 'show students', 'guard_name' => 'admin'],
            ['name' => 'add students', 'guard_name' => 'admin'],
            ['name' => 'edit students', 'guard_name' => 'admin'],
            ['name' => 'delete students', 'guard_name' => 'admin'],
            ['name' => 'index students', 'guard_name' => 'admin'],
            // student Permission for User
            ['name' => 'show students', 'guard_name' => 'web'],
            ['name' => 'add students', 'guard_name' => 'web'],
            ['name' => 'edit students', 'guard_name' => 'web'],
            ['name' => 'delete students', 'guard_name' => 'web'],
            ['name' => 'index students', 'guard_name' => 'web'],
            
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate($permission);
        }

    }
}
