<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atencion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table ='atencions';

    protected $dates = ['deleted_at', 'fecha_atencion'];

    protected $fillable = [
        'ficha_pacientes_id',
        'users_id',
        'fecha_atencion',
        'sintomas_paciente',
        'tratamiento_paciente',
        'observaciones_paciente'
    ];

    protected $with = ['ficha_pacientes','users'];

    public function ficha_pacientes(){
        return $this->belongsTo(FichaPaciente::class)->withTrashed();

    }

    public function users(){
        return $this->belongsTo(User::class);
    }

}

