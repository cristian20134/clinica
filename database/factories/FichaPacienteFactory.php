<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SistemaSalud;
use App\Models\GeneroPaciente;
use App\Models\CiudadPaciente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FichaPaciente>
 */
class FichaPacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sistema_saluds_id' => fake()->numberBetween(1,SistemaSalud::count()),
            'genero_pacientes_id' => fake()->numberBetween(1,GeneroPaciente::count()),
            'ciudad_pacientes_id' => fake()->numberBetween(1,CiudadPaciente::count()),
            'nombre_paciente' => fake()->name(),
            'apellido_paciente' => fake()->lastName(),
            'telefono_paciente' => fake()->phoneNumber(),
            'direccion_paciente' => fake()->address(),
            'correo_paciente' => fake()->email(),
            'fecha_nacimiento' => fake()->date(),
        ];
    }
}
