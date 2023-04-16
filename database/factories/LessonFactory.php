<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    protected $model = Lesson::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'module_id' => Module::factory(),
            'course_id' => Course::factory(),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'video_url' => '/videos/' . $this->faker->numberBetween(100000000, 999999999),
            'duration' => $this->faker->numberBetween(100, 999),
            'short_description' => $this->faker->sentence,
            'order' => $this->faker->numberBetween(1, 100),
            'status' => 'Active',
        ];
    }
}
