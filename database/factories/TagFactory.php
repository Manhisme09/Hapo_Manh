<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tag_name' => $this->faker->unique()->randomElement(['html', 'code', 'php', 'laravel', 'python', 'java', 'css', 'js', 'scss', 'git']),
        ];
    }
}
