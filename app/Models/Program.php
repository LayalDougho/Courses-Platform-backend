<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Program extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function courses()
{
    return $this->belongsToMany(Course::class, 'program_id', 'course_id');
}
}
