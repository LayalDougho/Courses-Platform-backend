<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->title(),
              'description' => $this->faker->paragraph(2), 
              'duration' => $this->faker->sentence(), 
              'price' => $this->faker->randomNumber(),
              'discount' => $this->faker->word() ,
              'what_you_will_learn' => $this->faker->sentence() ,
              'discount_duraion' => $this->faker->sentence() ,
              'course_content' => $this->faker->sentence() ,
              'training_program' => $this->faker->sentence() ,
              'teacher_id' => Teacher::factory(),
        ];
    }
}
