<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create(['name' => 'Design']);
        Category::create(['name' => 'Animation']);
        Category::create(['name' => 'Programming']);
        Category::create(['name' => 'Photo&Film']);
        Category::create(['name' => 'Illustration']);
        Category::create(['name' => 'Illustration']);

    }
}
