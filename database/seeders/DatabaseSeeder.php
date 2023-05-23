<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\SistemaSalud;
use App\Models\GeneroPaciente;
use App\Models\CiudadPaciente;
use App\Models\FichaPaciente;
use App\Models\User;
use App\Models\Atencion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       SistemaSalud::factory()->create(['nombre_sistema_salud' =>'Fonosa']);
       SistemaSalud::factory()->create(['nombre_sistema_salud' =>'Isapre']);
       SistemaSalud::factory()->create(['nombre_sistema_salud' =>'Particular']);

       GeneroPaciente::factory()->create(['nombre_genero' =>'Masculino']);
       GeneroPaciente::factory()->create(['nombre_genero' =>'Femenino']);

       CiudadPaciente::factory()->create(['nombre_ciudad' =>'Iquique']);
       CiudadPaciente::factory()->create(['nombre_ciudad' =>'Hospicio']);

      

         \App\Models\FichaPaciente::factory(10)->create();

         \App\Models\User::factory(10)->create();

         \App\Models\Atencion::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
