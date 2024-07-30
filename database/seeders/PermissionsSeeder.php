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
            'show students',
            'add students',
            'edit students',
            'delete students',
            'index students'
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission], ['guard_name' => 'web']);
        }
    }
}
