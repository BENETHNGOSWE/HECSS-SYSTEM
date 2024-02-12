<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\ProgramtoStudy;
use App\Models\StudentResults;
use App\Models\University;
use Illuminate\Http\Request;

class StudentresultsController extends Controller
{


    public function search(Request $request)
    {
        if ($request->has('student_number')) {
            $request->validate([
                'student_number' => 'required|string',
            ]);

            $studentNumber = $request->input('student_number');
            $studentResult = StudentResults::where('student_number', $studentNumber)->first();

            if (!$studentResult) {
                return redirect()->back()->with('error', 'Student result not found for the provided student number.');
            }

            return view('Students.search', compact('studentResult'));
        }

        return view('Students.search');
    }


   public function student_program(Request $request){
        $studentNumber = $request->input('student_number');

        // Retrieve student's grade from the database based on the student number
        $studentResult = StudentResults::where('student_number', $studentNumber)->first();
    
        if (!$studentResult) {
            return redirect()->back()->with('error', 'Student result not found for the provided student number.');
        }
    
        // Retrieve all program data from the database
        $programs = ProgramtoStudy::all();
    
        // Filter programs based on grade requirements
        $suggestedPrograms = $programs->filter(function ($program) use ($studentResult) {
            // Compare student's grade with program grade requirements
            // return $studentResult->student_grade >= $program->program_grade_min && $studentResult->student_grade <= $program->program_grade_max;
            return $studentResult->student_division >= $program->program_division;
        });
    
        // Return suggested programs to the user
        return view('Students.program')->with('suggestedPrograms', $suggestedPrograms);
    }

    public function showuniversity(ProgramtoStudy $program){
        $this->data['university'] = $program->university;
        $this->data['programs'] = $program;
        return view('Students.showuniversity', $this->data);
    }


   

    
}
