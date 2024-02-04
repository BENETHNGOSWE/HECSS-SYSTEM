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
        for ($i = 1; $i <= 10; $i++) {
            StudentResults::create([
                'student_number' => '001/2020/' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'physics_grade' => $this->generateGrade(),
                'math_grade' => $this->generateGrade(),
                'civics_grade' => $this->generateGrade(),
                'kiswahili_grade' => $this->generateGrade(),
                'english_grade' => $this->generateGrade(),
                'chemistry_grade' => $this->generateGrade(),
                'history_grade' => $this->generateGrade(),
                'student_grade' => rand(10, 100), // Example range, adjust as needed
            ]);
        }
    }

    private function generateGrade()
    {
        $grades = ['A', 'B', 'C', 'D', 'E', 'F']; // Example grades, adjust as needed
        return $grades[rand(0, count($grades) - 1)];
    }

}
