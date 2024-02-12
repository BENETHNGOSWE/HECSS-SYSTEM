<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramtoStudy extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        "program_name",
        "program_description",
        "program_yearof_study",
        "program_grade_min",
        "program_grade_max",
        "universityID",
    ];

    public function career_opportunities(){
        return $this->hasMany(CareerOpportunity::class, "program_id");
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'universityID');
    }
}

