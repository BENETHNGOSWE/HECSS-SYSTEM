<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResults extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_number',
        'physics_grade',
        'math_grade',
        'civics_grade',
        'kiswahili_grade',
        'english_grade',
        'chemistry_grade',
        'history_grade',
    ];

    
}
