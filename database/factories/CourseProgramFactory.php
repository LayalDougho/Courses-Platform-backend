<?php

namespace Database\Factories;

use App\Models\CourseProgram;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseProgramme>
 */
class CourseProgramFactory extends Factory
{
    protected $model = CourseProgram::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category_id = DB::table('courses')->inRandomOrder()->first()->id;
        $programme_id = DB::table('programs')->inRandomOrder()->first()->id;
        return [
            'course_id' => $category_id,
            'program_id' => $programme_id,
        ];
    }
}
