<?php

namespace App\Http\Controllers;

use App\Http\Requests\AtencionRequest;
use App\Http\Requests\FichaRequest;
use App\Models\Atencion;
use App\Models\CiudadPaciente;
use App\Models\FichaPaciente;
use App\Models\GeneroPaciente;
use App\Models\SistemaSalud;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $atencion = Atencion::latest()->paginate(50); //all - get - first
        return view('home', compact('atencion'));
    }



}


