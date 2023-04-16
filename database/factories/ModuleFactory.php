<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    protected $model = Module::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_id' => Course::factory(),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'duration' => $this->faker->numberBetween(1, 100),
            'number_of_lesson' => $this->faker->numberBetween(1, 100),
            'number_of_quiz' => $this->faker->numberBetween(1, 100),
            'number_of_attachment' => $this->faker->numberBetween(1, 100),
            'number_of_video' => $this->faker->numberBetween(1, 100),
            'order' => $this->faker->numberBetween(1, 100),
            'status' => 'Active',
        ];
    }
}
