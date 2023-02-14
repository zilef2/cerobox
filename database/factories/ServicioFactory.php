<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servicio>
 */
class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name(),
            'tipo_servicio_id' => $this->faker->numberBetween(1,2),
            'Fecha_inicio' => $this->faker->dateTimeBetween('-3 week', '-1 week'),
            'Fecha_fin' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'Observaciones' => $this->faker->text(),
        ];
    }
}
