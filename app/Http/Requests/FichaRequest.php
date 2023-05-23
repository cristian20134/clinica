<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FichaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        switch( $this->method()){
            case "POST":{
                return [
                    'nombre_paciente' =>'required|max:20',
                    'apellido_paciente' =>'required|max:20',
                    'telefono_paciente' =>'required|max:9',
                    'select_salud' =>'required|exists:sistema_saluds,id',
                    'select_genero' =>'required|exists:genero_pacientes,id',
                    'select_ciudad' =>'required|exists:ciudad_pacientes,id',
                    'direccion_paciente' =>'required|max:250',
                    'correo_paciente' =>'required|max:250',
                    'fecha_nacimiento' =>'required|date_format:Y-m-d',
                ];
            }

            case "PUT": {
                return [
                    'nombre_paciente' =>'required|max:20',
                    'apellido_paciente' =>'required|max:20',
                    'telefono_paciente' =>'required|max:9',
                    'select_salud' =>'required|exists:sistema_saluds,id',
                    'select_genero' =>'required|exists:genero_pacientes,id',
                    'select_ciudad' =>'required|exists:ciudad_pacientes,id',
                    'direccion_paciente' =>'required|max:250',
                    'correo_paciente' =>'required|max:250',
                    'fecha_nacimiento' =>'required|date_format:Y-m-d',
                ];
            }
        }
    }

    public function messages() {
        return [
            'nombre_paciente.required' =>'Este campo es Obligatorio',
            'apellido_paciente.required' =>'Este campo es Obligatorio',
            'telefono_paciente.required' =>'Este campo es Obligatorio',
            'select_salud.required' =>'Este campo es Obligatorio',
            'select_genero.required' =>'Este campo es Obligatorio',
            'select_ciudad.required' =>'Este campo es Obligatorio',          
            'direccion_paciente.required' =>'Este campo es Obligatorio',
            'correo_paciente.required' =>'Este campo es Obligatorio',
            'fecha_nacimiento.required' =>'Este campo es Obligatorio',

            'telefono_paciente.max' =>'El campo maximo debe tener :max números',

            'select_salud.exists' => 'El Registro no se encuentra en nuestra Base de Datos',
            'select_genero.exists' => 'El Registro no se encuentra en nuestra Base de Datos',
            'select_ciudad.exists' => 'El Registro no se encuentra en nuestra Base de Datos',

            'fecha_nacimiento' => 'El formato de Fecha Válido es dd-mm-AAAA'
        ];
    }
}
