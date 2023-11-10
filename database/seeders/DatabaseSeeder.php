<?php

namespace Database\Seeders;

//
////use App\Models\CourseProgram;
////use App\Models\PostTags;
//=======
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\Program;
use App\Models\Tag;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Course::factory(10)->create();

        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProjectSeeder::class);

        PostTags::factory(5)->create();
        CourseProgram::factory(25)->create();

    }
}
