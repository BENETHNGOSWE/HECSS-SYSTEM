<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;


class CareerOpportunity extends Model
{
    use HasFactory;
    use Commentable;

    
    protected $fillable = [
        "carrier_name",
        "career_description",
        "program_id",
    ];


    public function programto_studies(){
        return $this->belongsTo(ProgramtoStudy::class, "program_id");
    }
}

