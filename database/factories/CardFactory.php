<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'entryYear' => fake()->numberBetween(1998, 2023),
            'rarity' => fake()->numberBetween(1, 5),
            'isActive' => fake()->boolean(80),
            'cardImg' => fake()->imageUrl(64, 64, "people", false),
            'specialization' => fake()->jobTitle(),
            'age' => fake()->numberBetween(14, 100),
            'isSpecial' => fake()->boolean(20),
            'biography' => fake()->text(256),
        ];
    }
}
