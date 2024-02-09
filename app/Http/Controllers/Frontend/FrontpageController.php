<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CareerOpportunity;

class FrontpageController extends Controller
{
    protected $data = [];
    public function consruct(){
        $this->data['careers'] = CareerOpportunity::all();
    }
    public function index(){
        $this->data['careers'] = CareerOpportunity::take(3)->get();
        return view("frontend.homepage", $this->data);
    }
}
