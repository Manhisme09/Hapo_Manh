<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' => $this->faker->name(),
            'image' => 'https://source.unsplash.com/random',
            'description' => $this->faker->text(),
            'time' => rand(50, 90),
            'price' => rand(1000000, 9000000),
        ];
    }
}
