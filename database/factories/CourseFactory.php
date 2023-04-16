<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'coverimage' => $this->faker->imageUrl(640, 480, 'cats', true),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'cats', true),
            'duration' => $this->faker->numberBetween(1, 100),
            'short_description' => $this->faker->paragraph,
            'long_description'  => $this->faker->paragraph,
            'number_of_module'  => $this->faker->numberBetween(1, 10),
            'number_of_lesson'  => $this->faker->numberBetween(1, 100),
            'number_of_quiz'    => $this->faker->numberBetween(1, 100),
            'number_of_attachment' => $this->faker->numberBetween(1, 100),
            'status' => 'Active',
        ];
    }
}
