<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 course with 5 Modules and 10 Lessons each module
        Course::factory()
            ->count(10)
            ->hasModules(5)
            ->has(Lesson::factory()->count(10), 'lessons')
            ->create();
    }
}
