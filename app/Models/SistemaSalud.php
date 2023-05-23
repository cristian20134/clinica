<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaSalud extends Model
{
    use HasFactory;

    protected $table ='sistema_saluds';


    public $timestamps = false;

    public function ficha_pacientes(){
        return $this->hasOne(FichaPaciente::class);
    }
}
