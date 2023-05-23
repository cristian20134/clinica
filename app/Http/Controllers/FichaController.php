<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichaRequest;
use App\Models\CiudadPaciente;
use App\Models\FichaPaciente;
use App\Models\GeneroPaciente;
use App\Models\SistemaSalud;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $info = new FichaPaciente();
        //$ficha = FichaPaciente::all();
        $ficha = FichaPaciente::withTrashed()->get();
        $sistema = SistemaSalud::all();
        $genero = GeneroPaciente::all();
        $ciudad = CiudadPaciente::all();

        return view('ficha.create', compact(['sistema','genero','ciudad','ficha','info']));
    }


    public function store( FichaRequest $request){
        $ficha = FichaPaciente::create([
            'nombre_paciente' => $request->nombre_paciente,
            'apellido_paciente' => $request->apellido_paciente,
            'telefono_paciente' => $request->telefono_paciente,
            'sistema_saluds_id' => $request->select_salud,
            'genero_pacientes_id' => $request->select_genero,
            'ciudad_pacientes_id' => $request->select_ciudad,
            'direccion_paciente' => $request->direccion_paciente,
            'correo_paciente' => $request->correo_paciente,
            'fecha_nacimiento' => $request->fecha_nacimiento,
        ]);

        if ($ficha){
            session()->flash('mensaje', ['success', 'EL Paciente se ha registrado correctamente']);
            return redirect()->route('atencion.create');
        }
            session()->flash('mensaje', ['danger', 'Se ha producido un Error al registrar un Paciente']);
            return redirect()->route('ficha.create');
    }

    public function edit(FichaPaciente $info){
        $ficha = FichaPaciente::all();
        $sistema = SistemaSalud::all();
        $genero = GeneroPaciente::all();
        $ciudad = CiudadPaciente::all();

        return view('ficha.edit', compact(['sistema','genero','ciudad', 'info','ficha']));

    }

    public function update(FichaPaciente $info, FichaRequest $request){
        $update = $info->update([
            'nombre_paciente' => $request->nombre_paciente,
            'apellido_paciente' => $request->apellido_paciente,
            'telefono_paciente' => $request->telefono_paciente,
            'sistema_saluds_id' => $request->select_salud,
            'genero_pacientes_id' => $request->select_genero,
            'ciudad_pacientes_id' => $request->select_ciudad,
            'direccion_paciente' => $request->direccion_paciente,
            'correo_paciente' => $request->correo_paciente,
            'fecha_nacimiento' => $request->fecha_nacimiento,

        ]);

        if ( $update ) {
            session()->flash('mensaje', ['success', 'Los Datos del Paciente se han modificado correctamente']);
            return redirect()->route('ficha.create');
            }

            session()->flash('mensaje', ['danger', 'Se produjo un Error al modificar los Datos del Paciente']);
            return redirect()->route('ficha.edit');

    }

    public function delete(FichaPaciente $info){
        try {
            if ($info->delete()){
                session()->flash('mensaje', ['success', 'Se elimino la Ficha del Paciente correctamente']);
                return redirect()->route('ficha.create');
            }
            session()->flash('mensaje', ['danger', 'Se produjo un ERROR al eliminar la Ficha del Paciente']);
            return redirect()->route('ficha.create');

        } catch( \Exception $e) {
            abort(403);
        }
    }

    public function restore($info) {
        try {
            if (FichaPaciente::withTrashed()->findOrFail($info)->restore() ){
                session()->flash('mensaje', ['success', 'Se recuperó la Ficha del Paciente correctamente']);
                return redirect()->route('ficha.create');
            }
            session()->flash('mensaje', ['danger', 'Se produjo un ERROR al recuperar la Ficha del Paciente correctamente']);
            return redirect()->route('ficha.create');

        } catch( \Exception $e) {
            abort(403);
        }
    }

}
