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
        // for ($i = 1; $i <= 10; $i++) {
        //     University::create([
        //         'university_name' => 'University ' . $i,
        //         'university_admission' => 'Admission Criteria ' . $i,
        //         'university_location' => 'Location ' . $i,
        //     ]);
        // }

        University::create([
            'university_name' => 'National Institute of Transport (NIT)',
            'university_admission' => 'Public',
            'university_location' => 'Dar es Salaam',
        ]);
        
        University::create([
            'university_name' => 'University of Dar es Salaam (UDSM)',
            'university_admission' => 'Public',
            'university_location' => 'Dar es Salaam',
        ]);
        
        University::create([
            'university_name' => 'Sokoine University of Agriculture (SUA)',
            'university_admission' => 'Public',
            'university_location' => 'Morogoro',
        ]);
        
        University::create([
            'university_name' => 'State University of Zanzibar (SUZA)',
            'university_admission' => 'Public',
            'university_location' => 'Zanzibar',
        ]);
        
        University::create([
            'university_name' => 'Tanzania Institute of Accountancy (TIA)',
            'university_admission' => 'Public',
            'university_location' => 'Mwanza',
        ]);
        
        University::create([
            'university_name' => 'Dar es Salaam Institute of Technology (DIT)',
            'university_admission' => 'Public',
            'university_location' => 'Dar es Salaam',
        ]);
        
        University::create([
            'university_name' => 'Institute of Accountancy Arusha (IAA)',
            'university_admission' => 'Public',
            'university_location' => 'Arusha',
        ]);
        
        University::create([
            'university_name' => 'Mwenge Catholic University (MWECAU)',
            'university_admission' => 'Private',
            'university_location' => 'Kilimanjaro',
        ]);
        
        University::create([
            'university_name' => 'Mzumbe University (MU)',
            'university_admission' => 'Public',
            'university_location' => 'Morogoro',
        ]);
        
        University::create([
            'university_name' => 'University of Dodoma (UDOM)',
            'university_admission' => 'Public',
            'university_location' => 'Dodoma',
        ]);
        
    }
}
