<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return 
        [
            'price' => fake()->randomFloat(2,0,5000),
            'name' => fake()->word(),
            'type' => fake()->randomElement(["High-Tech","Livre","Jardin","Santé et beauté","Sport","Alimentation et boissons"]),
            'description' => fake()->text()
        ];
    }
}
