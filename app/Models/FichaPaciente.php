<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FichaPaciente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table ='ficha_pacientes';

    protected $dates = ['deleted_at', 'fnacimiento'];

    protected $fillable = [
        'sistema_saluds_id',
        'genero_pacientes_id',
        'ciudad_pacientes_id',
        'nombre_paciente',
        'apellido_paciente',
        'telefono_paciente',
        'direccion_paciente',
        'correo_paciente',
        'fecha_nacimiento'
    ];

    protected $with = ['sistema_saluds', 'genero_pacientes','ciudad_pacientes'];

    public function sistema_saluds(){
        return $this->belongsTo(SistemaSalud::class);
    }

    public function genero_pacientes(){
        return $this->belongsTo(GeneroPaciente::class);
    }

    public function ciudad_pacientes(){
        return $this->belongsTo(CiudadPaciente::class);
    }

    public function atencions(){
        return $this->hasMany(Atencion::class)->withTrashed();
    }

}
