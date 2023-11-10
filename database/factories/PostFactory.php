<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
            'title' => $this->faker->sentence(),
              'image' => $this->faker->imageUrl(),
              'reading_duration' => $this->faker->sentence(),
              'content' => $this->faker->paragraph(5),
              'category_id' => DB::table('categories')->inRandomOrder()->first()->id ?? null,
        ];
    }
}
