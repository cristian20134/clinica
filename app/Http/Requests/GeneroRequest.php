<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneroRequest extends FormRequest
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
            case "POST":
            case "PUT": {    
                return [
                    'nombre_genero'=>'required|min:05|max:20',
                ];
            }
               
        }
    }

    public function messages() {
        return [
         
            'nombre_genero.required' =>'Este campo es Obligatorio',
            'nombre_genero.min' =>'El campo debe tener como mínimo una cantidad de :min caracteres.',
            'nombre_genero.max' =>'El campo debe tener como máximo una cantidad de :max caracteres.',
        ];
    }
}
    

