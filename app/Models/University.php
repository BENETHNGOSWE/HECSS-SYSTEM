<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        "university_name",
        "university_admission",
        "university_location",
    ] ;


    public function programto_studies(){
        return $this->belong(ProgramtoStudy::class);
    }
}
