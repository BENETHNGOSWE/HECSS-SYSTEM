<?php

namespace Database\Seeders;

use App\Models\StudentResults;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        StudentResults::create([
            'student_number' => '5180/0001/2018',
            'physics_grade' => 'F',
            'math_grade' => 'F',
            'civics_grade' => 'C',
            'kiswahili_grade' => 'D',
            'english_grade' => 'D',
            'chemistry_grade' => 'D',
            'history_grade' => 'F',
            'student_grade' => 28,
            'student_division' => 4,
        ]);

        StudentResults::create([
            'student_number' => 'S5180/0002/2018',
            'physics_grade' => 'A',
            'math_grade' => 'B',
            'civics_grade' => 'B',
            'kiswahili_grade' => 'C',
            'english_grade' => 'A',
            'chemistry_grade' => 'B',
            'history_grade' => 'A',
            'student_grade' => 12,
            'student_division' => 1,
        ]);

        StudentResults::create([
            'student_number' => 'S5180/0003/2018',
            'physics_grade' => 'C',
            'math_grade' => 'D',
            'civics_grade' => 'B',
            'kiswahili_grade' => 'C',
            'english_grade' => 'C',
            'chemistry_grade' => 'C',
            'history_grade' => 'B',
            'student_grade' => 18,
            'student_division' => 1,
        ]);

        StudentResults::create([
            'student_number' => 'S5180/0004/2018',
            'physics_grade' => 'A',
            'math_grade' => 'A',
            'civics_grade' => 'A',
            'kiswahili_grade' => 'A',
            'english_grade' => 'A',
            'chemistry_grade' => 'A',
            'history_grade' => 'B',
            'student_grade' => 7,
            'student_division' => 1,
        ]);

        StudentResults::create([
            'student_number' => 'S5180/0005/2018',
            'physics_grade' => 'C',
            'math_grade' => 'F',
            'civics_grade' => 'D',
            'kiswahili_grade' => 'B',
            'english_grade' => 'D',
            'chemistry_grade' => 'A',
            'history_grade' => 'C',
            'student_grade' => 24,
            'student_division' => 3,
        ]);
    }

    // private function generateGrade()
    // {
    //     $grades = ['A', 'B', 'C', 'D', 'E', 'F']; // Example grades, adjust as needed
    //     return $grades[rand(0, count($grades) - 1)];
    // }

}
