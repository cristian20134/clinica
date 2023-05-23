<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GeneroPaciente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table ='genero_pacientes';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombre_genero',
    ];

    //public $timestamps = false;

    public function ficha_pacientes(){
        return $this->hasOne(FichaPaciente::class);
    }
}
