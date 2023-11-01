<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'image', 'specialization'];


    public function courses()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }

}
