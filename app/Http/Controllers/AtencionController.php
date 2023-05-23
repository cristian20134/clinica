<?php

namespace App\Http\Controllers;

use App\Http\Requests\AtencionRequest;
use App\Models\Atencion;
use App\Models\FichaPaciente;
use App\Models\User;
use Illuminate\Http\Request;

class AtencionController extends Controller
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

    public function show(Atencion $atencion){
        //$atencion = Atencion::where('id', request()->id)->first();
        return view('atencion.show', compact('atencion'));
    }

    public function add(Atencion $atencion){
        //$atencion = Atencion::where('id', request()->id)->first();
        return view('atencion.add', compact('atencion'));
    }

    public function uss(Atencion $atencion){
        //$atencion = Atencion::where('id', request()->id)->first();
        return view('atencion.uss', compact('atencion'));
    }

    public function create2(){

        $atencion = new Atencion();
        $info =  Atencion::withTrashed()->get();
        $ficha = FichaPaciente::all();
        $medico = User::all();

        return view('atencion.create', compact(['ficha','medico','atencion','info']));
    }

    public function store2( AtencionRequest $request){
        $info = Atencion::create([
            'ficha_pacientes_id' => $request->select_ficha,
            'users_id' => $request->select_medico,
            'fecha_atencion' => $request->fecha_atencion,
            'sintomas_paciente' => $request->sintomas_paciente,
            'tratamiento_paciente' => $request->tratamiento_paciente,
            'observaciones_paciente' => $request->observaciones_paciente,
        ]);

        if ($info){
            session()->flash('mensaje', ['success', 'La Atención se ha registrado correctamente']);
            return redirect()->route('home', ['id' =>$info->id]);
        }
            session()->flash('mensaje', ['danger', 'Se ha producido un Error al registrar la Atención']);
            return redirect()->route('ficha.create');
    }

    public function edit2(Atencion $atencion){
        $info = Atencion::all();
        $ficha = FichaPaciente::all();
        $medico = User::all();

        return view('atencion.edit', compact(['ficha','medico','atencion','info']));
    }

    public function update2(Atencion $atencion, AtencionRequest $request){
        $update = $atencion->update([
            'ficha_pacientes_id' => $request->select_ficha,
            'users_id' => $request->select_medico,
            'fecha_atencion' => $request->fecha_atencion,
            'sintomas_paciente' => $request->sintomas_paciente,
            'tratamiento_paciente' => $request->tratamiento_paciente,
            'observaciones_paciente' => $request->observaciones_paciente,
        ]);

        if ( $update ) {
            session()->flash('mensaje', ['success', 'Los Datos de Atención se han modificado correctamente']);
            return redirect()->route('atencion.create');
            }

            session()->flash('mensaje', ['danger', 'Se produjo un Error al modificar los Datos de Atención']);
            return redirect()->route('atencion.create');

    }

    public function delete(Atencion $atencion){
        try {
            if ($atencion->delete()){
                session()->flash('mensaje', ['success', 'Se elimino la Atención correctamente']);
                return redirect()->route('atencion.create');
            }
            session()->flash('mensaje', ['danger', 'Se produjo un ERROR al eliminar la Atención']);
            return redirect()->route('home');

        } catch( \Exception $e) {
            abort(403);
        }
    }

    /*public function recover(Atencion $atencion) {
        $dato = Atencion::where($atencion)->withTrashed()->firstOrFail();

        try {
            if ($dato->recover()){
                session()->flash('mensaje', ['success', 'Se recupero la Atención']);
                return redirect()->route('home');
            }
            session()->flash('mensaje', ['danger', 'Se produjo un ERROR al recuperar la Atención']);
            return redirect()->route('home');
        } catch( \Exception $e) {
            abort(403);
        }
    }*/

    public function restore($atencion) {
        try {
            if (Atencion::withTrashed()->findOrFail($atencion)->restore() ){
                session()->flash('mensaje', ['success', 'Se recuperó la Atención correctamente']);
                return redirect()->route('home');
            }
            session()->flash('mensaje', ['danger', 'Se produjo un ERROR al recuperar la Atención']);
            return redirect()->route('atencion.create');

        } catch( \Exception $e) {
            abort(403);
        }
    }

}
