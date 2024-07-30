<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'John Doe',
            'mobile' => '0123456789',
        ]);

        Student::create([
            'name' => 'Jane Smith',
            'mobile' => '0987654321',
        ]);
    }
}
