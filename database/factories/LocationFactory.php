<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->city,
            'status' => 'active', // or $this->faker->randomElement(['active', 'inactive']),
            'address' => $this->faker->paragraph,
            'image'=>'locations/VEoueu1bxMzM3jYn1JWKbg1PT5ur0h73RKNU6UMf.jpg'
        ];
    }
}
