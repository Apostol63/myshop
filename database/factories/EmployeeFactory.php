<?php

namespace Database\Factories;

use App\Enums\EmployeeStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition()
    {
        return [
            'firstName' => fake()->firstName,
            'lastName' => fake()->lastName,
            'secondName' => fake()->firstName,
            'status' => EmployeeStatus::AT_WORK,
        ];
    }
}
