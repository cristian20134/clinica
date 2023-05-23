<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneroRequest;
use App\Models\GeneroPaciente;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function create(){
        $info = new GeneroPaciente();
        $genero = GeneroPaciente::withTrashed()->get();
        return view('genero.create', compact(['genero', 'info']));
    }

    public function store(GeneroRequest $request){
        $genero = GeneroPaciente::create([
            'nombre_genero' => $request->nombre_genero
        ]);

        if ( $genero ) {
            session()->flash('mensaje', ['success', 'El nuevo Género se ha registrado correctamente']);
            return redirect()->route('genero.create');
        }
            session()->flash('mensaje', ['danger', 'Se ha producido un Error al agregar un Género']);
            return redirect()->route('genero.create');
    }


    public function edit(GeneroPaciente $info){
        $genero = GeneroPaciente::all();
        return view('genero.edit', compact(['genero','info']));
    }

    public function update(GeneroPaciente $info, GeneroRequest $request) {
        $update = $info->update([
            'nombre_genero'=>$request->nombre_genero
        ]);

        if ( $update ) {
        session()->flash('mensaje', ['success', 'Los Datos de Género se han modificado correctamente']);
        return redirect()->route('genero.create');
        }

        session()->flash('mensaje', ['danger', 'Se produjo un Error al modificar los Datos de Género']);
        return redirect()->route('genero.create');
    }

    public function delete(GeneroPaciente $info){
        try {
            if ($info->delete()){
                session()->flash('mensaje', ['success', 'Se elimino el Género']);
                return redirect()->route('genero.create');
            }
            session()->flash('mensaje', ['danger', 'Se produjo un ERROR al eliminar el Género']);
            return redirect()->route('genero.create');

        } catch( \Exception $e) {
            abort(403);
        }
    }

    public function restore($info) {
        try {
            if (GeneroPaciente::withTrashed()->findOrFail($info)->restore() ){
                session()->flash('mensaje', ['success', 'Se recuperó el Género']);
                return redirect()->route('genero.create');
            }
            session()->flash('mensaje', ['danger', 'Se produjo un ERROR al recuperar el Género']);
            return redirect()->route('genero.create');

        } catch( \Exception $e) {
            abort(403);
        }
    }


}
