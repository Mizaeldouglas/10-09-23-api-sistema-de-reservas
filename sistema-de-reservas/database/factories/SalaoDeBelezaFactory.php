<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SalaoDeBeleza>
 */
class SalaoDeBelezaFactory extends Factory
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
            'data' => $this->faker->date(),
            'hora' => $this->faker->time(),
            'observacoes' => $this->faker->text(),
        ];
    }
}
