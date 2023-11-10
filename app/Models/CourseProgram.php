<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CourseProgram extends Pivot
{
    use HasFactory;
    protected $table = 'course_program';

    protected $fillable = [
        'course_id',
        'program_id',
    ];
}
