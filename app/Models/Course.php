<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'discount_id',
        'title',
        'description',
        'duration',
        'price',
        'what_you_will_learn' ,
        'course_content' ,
        'training_program'
    ];

    public function teachers(): BelongsTo
    {
        return $this->belongsTo(Teacher::class ,'teacher_id');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class , 'course_id');
    }

    public function programmes()
    {
      return $this->belongsToMany(Program::class , 'course_program' , 'program_id' , 'course_id');
    }

}
