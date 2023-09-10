<?php

namespace Database\Factories;

use App\Models\Hotel;
use App\Models\Restaurante;
use App\Models\SalaoDeBeleza;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'data_inicio' => $this->faker->date(),
            'data_fim' => $this->faker->date(),
            'numero_cadeiras' => $this->faker->numberBetween(1, 10),
            'numero_mesas' => $this->faker->numberBetween(1, 2),
            'numero_quartos' => $this->faker->numberBetween(1, 2),
            'numero_pessoas' => $this->faker->numberBetween(1, 10),
            'tipo_quarto' => $this->faker->name(),
            'observacoes' => $this->faker->text(),
            'status' => $this->faker->randomElement(['confirmada', 'pendente', 'cancelada']),
            'hotel_id' => Hotel::factory(),
            'restaurante_id' => Restaurante::factory(),
            'salao_de_beleza_id' => SalaoDeBeleza::factory(),
        ];
    }
}
