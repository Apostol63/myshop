<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name,
            'cost' => fake()->randomElement([
                fake()->randomNumber(3),
                fake()->randomNumber(4),
                fake()->randomNumber(5),
            ]),
        ];
    }
}
