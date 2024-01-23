<?php

namespace Database\Factories\Allison_desafio_models;

use App\Models\Allison_desafio_models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corporativa>
 */
class CorporativaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile_id' => Profile::factory(),
            'cargo' => $this->faker->randomElement(['dev jr', 'dev pleno', 'dev senior']),
            'funcao' => $this->faker->randomElement(['dev jr', 'dev pleno', 'dev senior']),
            'tipo_de_tecnologia' => $this->faker->word,
            'empresa' => $this->faker->company,
            'modalidade' => $this->faker->word,
            'salario' => $this->faker->randomFloat(2, 1000, 10000),
        ];
    }
}
