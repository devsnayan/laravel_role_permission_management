<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use GuzzleHttp\Promise\Create;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $students =[
                [
                    'name' => 'Mohammad Yeasin Arfat Nayan',
                    'mobile' => '01690091590',
                ],
                [
                    'name' => 'Yeasin Ibrahim Ridoan',
                    'mobile' => '0123456789',
                ],
                [
                    'name' => 'Sharmila Alam Risha',
                    'mobile' => '0987654321',
                ],
                [
                    'name' => 'Mohammad Nayan',
                    'mobile' => '0987654321',
                ],
                [
                    'name' => 'Khan Mahammud',
                    'mobile' => '0987654321',
                ],
                [
                    'name' => 'Shadath Alam ',
                    'mobile' => '0987654321',
                ],
            ];

            // Insert data
            foreach($students as $student){
                Student::create([
                    'name' => $student['name'],
                    'mobile' => $student['mobile']
                ]);
            }
    }
}
