<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trajet>
 */
class TrajetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "gareDepart" => "Gare de ".fake()->city(),
            "gareArriver" => "Gare de ".fake()->city(),
            "heureDepart" => fake()->datetime(),
            "heureArriver" => fake()->datetime(),
            "prix" => fake()->randomFloat(),
            "capacite" => fake()->randomNumber(),
        ];
    }
}
