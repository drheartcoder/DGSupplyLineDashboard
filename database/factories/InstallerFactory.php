<?php

namespace Database\Factories;

use App\Models\Installer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InstallerFactory extends Factory
{
    protected $model = Installer::class;

    public function definition(): array
    {
        $businessName = $this->faker->company;

        return [
            'business_name' => $businessName,
            'url' => Str::slug($businessName),
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'website_url' => $this->faker->url,
            'address_1' => $this->faker->streetAddress,
            'address_2' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'county' => $this->faker->state,
            'postcode' => $this->faker->postcode,
            'status' => $this->faker->randomElement(['Pending', 'Active', 'Disabled']),
        ];
    }
}

