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
              'discount' => $this->faker->numberBetween(0 , 100) ,
              'what_you_will_learn' => $this->faker->sentence() ,
              'discount_duration' => $this->faker->dateTime(),
              'course_content' => json_encode ([
                  $this->faker->sentence(),
                  $this->faker->sentence(),
                  $this->faker->sentence(),
                  $this->faker->sentence(),
              ]),
              'training_program' => json_encode( [
                   $this->faker->word() => $this->faker->sentence(),
                  $this->faker->word() => $this->faker->sentence(),
                  $this->faker->word() => $this->faker->sentence(),
              ] ),
              'teacher_id' => Teacher::factory(),
        ];
    }
}
