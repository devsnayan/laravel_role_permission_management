<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Admin;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //    **********************************
        // Admin role_permission

        // Super_Admin
       $super_admin = Role::where('name','super_admin')->first();
       $super_admin->givePermissionTo(['show students', 'add students', 'edit students', 'delete students', 'index students']);

        // Super_Editor
       $super_editor = Role::where('name','super_editor')->first();
       $super_editor->givePermissionTo(['index students', 'edit students', 'show students']);

        // Super_Viewer
       $super_viewer = Role::where('name','super_viewer')->first();
       $super_viewer->givePermissionTo(['index students', 'show students']);

       // Assign roles to users
       $admin = Admin::find(1); // Assuming you have a admin with ID 1
       $admin->assignRole('super_admin');
       $admin = Admin::find(2); // Assuming you have a admin with ID 2
       $admin->assignRole('super_editor');
       $admin = Admin::find(3); // Assuming you have a admin with ID 3
       $admin->assignRole('super_viewer');




        //    **********************************
        // User role_permission

        // Admin User
        $user = Role::where('name','user')->first();
        $user->givePermissionTo(['show students', 'add students', 'edit students', 'delete students', 'index students']);

        // User_Editor
        $user_editor = Role::where('name','user_editor')->first();
        $user_editor->givePermissionTo(['index students', 'edit students']);

        // User_Viewer
        $user_viewer = Role::where('name','user_viewer')->first();
        $user_viewer->givePermissionTo(['index students', 'show students']);

        // Assign roles to users
        $user = User::find(1); // Assuming you have a user with ID 1
        $user->assignRole('user');
        $user = User::find(2); // Assuming you have a user with ID 2
        $user->assignRole('user_editor');
        $user = User::find(3); // Assuming you have a user with ID 3
        $user->assignRole('user_viewer');
    }
}
