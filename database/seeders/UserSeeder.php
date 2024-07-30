<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Nayan',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Editor Nayan',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Viewer Nayan',
            'email' => 'viewer@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
