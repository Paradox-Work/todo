<?php

namespace Database\Factories;

use App\Models\ToDo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ToDoFactory extends Factory
{
    protected $model = ToDo::class;

    public function definition(): array
    {
        return [
            'content' => $this->faker->sentence(),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'completed' => $this->faker->boolean(),
        ];
    }
}
