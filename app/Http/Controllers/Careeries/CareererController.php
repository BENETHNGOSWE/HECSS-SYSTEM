<?php

namespace App\Http\Controllers\Careeries;

use App\Http\Controllers\Controller;
use App\Models\CareerOpportunit;
use App\Models\CareerOpportunity;
use App\Models\ProgramtoStudy;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareererController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['careerer'] = CareerOpportunity::all();
        $this->data['programs'] = ProgramtoStudy::all();
    }

    public function index(){
        $this->data['careers'] = CareerOpportunity::all();
        return view('Careerers.index', $this->data);
    }

    public function create(){
        $this->data['programs'] = ProgramtoStudy::pluck('program_name','id');
        return view('Careerers.create', $this->data);
    }

    public function validate_careerer(Request $request){  
        return $request->validate([
            'carrier_name'=> 'required',
            'career_description'=> 'required|string|max:5000',
            'program_id'=> 'required|exists:programto_studies,id',
        ]);
    }

    public function store(Request $request){
        $validate = $this->validate_careerer($request);

        try {
            DB::beginTransaction();
            $career = new CareerOpportunity();
            $career->fill($validate);
            $career->save();
            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();
            \Log::error($th->getMessage(). ''. $th->getTraceAsString());
            return back()->with('error', $th->getMessage());
        }
        return to_route('homepage');
    }


    public function search_program(Request $request){
        $program = $request->program;
        $careers = CareerOpportunity::where(function ($query) use ($program){
            $query->where('carrier_name', 'ILIKE',"%$program%")
            ->orWhere("career_description", "ILIKE","$program");
        })
        ->orWhereHas("programto_studies", function ($query) use ($program){
            $query->where('program_name', 'ILIKE', "%$program%");
        })
        ->get();
        return view('Careerers.index', compact('careers', 'program'));
       
    }

    public function show(CareerOpportunity $career_opportunities){
        $this->data['careers'] = $career_opportunities;
        return view('Careerers.show', $this->data);
    }
}
