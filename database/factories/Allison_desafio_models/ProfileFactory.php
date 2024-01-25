<?php

namespace Database\Factories\Allison_desafio_models;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid,
            'nome' => $this->faker->firstName,
            'sobrenome' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'pais' => $this->faker->country,
            'cidade' => $this->faker->city,
        ];
    }
}
