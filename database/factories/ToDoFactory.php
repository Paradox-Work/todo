<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToDo>
 */
class ToDoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'content' => $this->faker->sentence(),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'completed' => $this->faker->boolean(),
        ];
    }
}
