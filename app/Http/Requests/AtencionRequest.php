<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtencionRequest extends FormRequest
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
                    'select_ficha' =>'required|exists:ficha_pacientes,id',
                    'select_medico' =>'required|exists:users,id',
                    'fecha_atencion' =>'required|date_format:Y-m-d',
                    'sintomas_paciente'=>'required|min:10|max:250',
                    'tratamiento_paciente'=>'required|min:10|max:250',
                    'observaciones_paciente'=>'required|min:10|max:250',
                ];
            }

            case "PUT":{
                return [
                    'select_ficha' =>'required|exists:ficha_pacientes,id',
                    'select_medico' =>'required|exists:users,id',
                    'fecha_atencion' =>'required|date_format:Y-m-d',
                    'sintomas_paciente'=>'required|min:10|max:250',
                    'tratamiento_paciente'=>'required|min:10|max:250',
                    'observaciones_paciente'=>'required|min:10|max:250',
                ];
            }
        }
    }

    public function messages() {
        return [
            'select_ficha.required' =>'Este campo es Obligatorio',
            'select_medico.required' =>'Este campo es Obligatorio',
            'fecha_atencion.required' =>'Este campo es Obligatorio',
            'sintomas_paciente.required' =>'Este campo es Obligatorio',
            'tratamiento_paciente.required' =>'Este campo es Obligatorio',
            'observaciones_paciente.required' =>'Este campo es Obligatorio',

            'select_ficha.exists' =>'El Paciente no se encuentra en nuestra Base de Datos',
            'select_medico.exists' =>'El Médico no se encuentra en nuestra Base de Datos',

            'sintomas_paciente.min' =>'El campo debe tener como mínimo una cantidad de :min caracteres.',
            'tratamiento_paciente.min' =>'El campo debe tener como mínimo una cantidad de :min caracteres.',
            'obervaciones_paciente.min' =>'El campo debe tener como mínimo una cantidad de :min caracteres.',

            'sintomas_paciente.max' =>'El campo debe tener como máximo una cantidad de :max caracteres.',
            'tratamiento_paciente.max' =>'El campo debe tener como máximo una cantidad de :max caracteres.',
            'obervaciones_paciente.max' =>'El campo debe tener como máximo una cantidad de :max caracteres.',

            'fecha_atencion' => 'El formato de Fecha Válido es dd-mm-AAAA'
        ];
    }
}