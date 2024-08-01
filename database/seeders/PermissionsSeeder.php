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
            [
                'name' => 'show students',
                'guard_name' => 'admin'
            ],
            [
                'name' => 'add students',
                'guard_name' => 'admin'
            ],
            [
                'name' => 'edit students',
                'guard_name' => 'admin'
            ],
            [
                'name' => 'delete students',
                'guard_name' => 'admin'
            ],
            [
                'name' => 'index students',
                'guard_name' => 'admin'
            ],
            [
                'name' => 'show students',
                'guard_name' => 'web'
            ],
            [
                'name' => 'add students',
                'guard_name' => 'web'
            ],
            [
                'name' => 'edit students',
                'guard_name' => 'web'
            ],
            [
                'name' => 'delete students',
                'guard_name' => 'web'
            ],
            [
                'name' => 'index students',
                'guard_name' => 'web'
            ],
            
        ];

        foreach ($permissions as $permission) {
            Permission::create(
                [
                   'name' => $permission['name'],
                   'guard_name' => $permission['guard_name'],
                ]
            );
        }

    }
}
