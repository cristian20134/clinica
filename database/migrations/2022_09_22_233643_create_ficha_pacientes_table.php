<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidphp 
     */
    public function up()
    {
        Schema::create('ficha_pacientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sistema_saluds_id');
            $table->unsignedBigInteger('genero_pacientes_id');
            $table->unsignedBigInteger('ciudad_pacientes_id');
            $table->foreign('sistema_saluds_id')->references('id')->on('sistema_saluds');
            $table->foreign('genero_pacientes_id')->references('id')->on('genero_pacientes');
            $table->foreign('ciudad_pacientes_id')->references('id')->on('ciudad_pacientes');
            $table->string('nombre_paciente');
            $table->string('apellido_paciente');
            $table->string('telefono_paciente');
            $table->string('direccion_paciente');
            $table->string('correo_paciente');
            $table->date('fecha_nacimiento');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha_pacientes');
    }
};
