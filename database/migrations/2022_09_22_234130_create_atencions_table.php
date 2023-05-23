<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_pacientes_id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('ficha_pacientes_id')->references('id')->on('ficha_pacientes');
            $table->foreign('users_id')->references('id')->on('users');
            $table->dateTime('fecha_atencion');
            $table->text('sintomas_paciente');
            $table->text('tratamiento_paciente');
            $table->text('observaciones_paciente'); 
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
        Schema::dropIfExists('atencions');
    }
};
