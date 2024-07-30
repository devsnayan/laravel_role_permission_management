<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin
       $admin = Role::findByName('admin');
       $admin->givePermissionTo([
            'show students',
            'add students',
            'edit students',
            'delete students',
            'index students'
    ]);

        // editor
       $editor = Role::findByName('editor');
       $editor->givePermissionTo([
            'index students', 
            'edit students', 
            'show students'
        ]);

        // viewer
       $viewer = Role::findByName('viewer');
       $viewer->givePermissionTo([
            'index students',
            'show students'
        ]);

       // Assign roles to users
       $user = User::find(1); // Assuming you have a user with ID 1
       $user->assignRole('admin');
       $user = User::find(2); // Assuming you have a user with ID 2
       $user->assignRole('editor');
       $user = User::find(3); // Assuming you have a user with ID 3
       $user->assignRole('viewer');
    }
}
