<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurante>
 */
class RestauranteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->company(),
            'telefone' => $this->faker->phoneNumber(),
            'email' => $this->faker->companyEmail(),
            'numero_cadeiras' => $this->faker->numberBetween(1, 5),
            'numero_mesas' => $this->faker->numberBetween(1, 2),
            'numero_pessoas' => $this->faker->numberBetween(1, 10),
            'observacoes' => $this->faker->text(),
        ];
    }
}
