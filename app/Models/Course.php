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
    protected $fillable = ['title', 'description', 'duration', 'price', 'discount', 'what_you_will_learn', 'training_program' , 'discount_duration' ,'teacher_id'];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'course_id');
    }


    public function programs()
{
    return $this->belongsToMany(Program::class, 'course_id', 'program_id');
}

}
