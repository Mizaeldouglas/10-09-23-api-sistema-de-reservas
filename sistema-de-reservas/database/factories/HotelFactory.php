<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
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
            'numero_quartos' => $this->faker->numberBetween(1, 5),
            'tipo_quarto' => $this->faker->name(),
            'numero_pessoas' => $this->faker->numberBetween(1, 5),
            'quantidade_camas' => $this->faker->numberBetween(1, 3),
            'observacoes' => $this->faker->text(),
        ];
    }
}
