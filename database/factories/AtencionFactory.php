<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FichaPaciente;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atencion>
 */
class AtencionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ficha_pacientes_id' => fake()->numberBetween(1,FichaPaciente::count()),
            'users_id' => fake()->numberBetween(1,User::count()),
            'fecha_atencion' => fake()->datetime(),
            'sintomas_paciente' => fake()->text(),
            'tratamiento_paciente' => fake()->text(),
            'observaciones_paciente' => fake()->text(),

        ];
    }
}
