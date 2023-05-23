<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CiudadPaciente extends Model
{
    use HasFactory;

    protected $table ='ciudad_pacientes';

    protected $dates = ['deleted_at'];

    public $timestamps = false;


    public function ficha_pacientes(){
        return $this->hasMany(FichaPaciente::class);
    }

}
