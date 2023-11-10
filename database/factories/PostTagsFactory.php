<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostTag>
 */
class PostTagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => DB::table('posts')->inRandomOrder()->first()->id,
            'tag_id' => DB::table('tags')->inRandomOrder()->first()->id,
        ];
    }
}
