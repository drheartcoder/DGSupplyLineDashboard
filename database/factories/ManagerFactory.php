<?php

namespace Database\Factories;

use App\Models\Manager;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManagerFactory extends Factory
{
    protected $model = Manager::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'role' => $this->faker->randomElement(['Editor', 'Administrator']),
            'status' => $this->faker->randomElement(['Pending', 'Active', 'Disabled']),
        ];
    }
}

