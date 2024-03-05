<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Models\ProgramtoStudy;
use App\Models\StudentResults;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['vyuo'] = University::all();
        $this->data['program'] = ProgramtoStudy::all();
    }


    public function index(){
        return view('Programs.index', $this->data);
    }


    public function create(){
        $this->data['universities'] = University::pluck('university_name','id');
        return view('Programs.create', $this->data);
    }


    public function validate_program(Request $request){
        return $request ->validate([
            'program_name'=> 'required',
            'program_description'=> 'required|string|max:5000',
            'program_yearof_study'=> 'required',
            'program_division'=>'required',
            'program_grade_min'=>'required',
            'program_grade_max'=>'required',
            'universityID'=> 'required|exists:universities,id',
            
        ]);
    }


    public function store(Request $request){
        $validate = $this->validate_program($request);

        try {
            DB::beginTransaction();
            $program = new ProgramtoStudy();
            $program->fill($validate);
            $program->save();
            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage().''.$th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('homepage');
    }



   
}
