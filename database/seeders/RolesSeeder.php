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
        $admin = Role::updateOrCreate(['name' => 'admin'], ['guard_name' => 'web']);
        $editor = Role::updateOrCreate(['name' => 'editor'], ['guard_name' => 'web']);
        $viewer = Role::updateOrCreate(['name' => 'viewer'], ['guard_name' => 'web']);
    
    }
}
