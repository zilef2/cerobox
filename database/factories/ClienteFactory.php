<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
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
            // profile_photo_path
            'Cedula' => $this->faker->numberBetween(1002194566,10000000000),
            'Correo' => $this->faker->email(),
            'Telefono' => $this->faker->phoneNumber(),
            'Observaciones' => $this->faker->text(),
         ];
    }
}
