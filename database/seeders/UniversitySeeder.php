<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create 10 university records
        for ($i = 1; $i <= 10; $i++) {
            University::create([
                'university_name' => 'University ' . $i,
                'university_admission' => 'Admission Criteria ' . $i,
                'university_location' => 'Location ' . $i,
            ]);
        }
    }
}
