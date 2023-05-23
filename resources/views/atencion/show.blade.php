@extends('layouts.dashboard')

@section('titulo_pagina')
    Clinica CTM | Home
@endsection

@section('titulo_seccion')
    Ficha Atención Clinica
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active">Información Atención</li>
@endsection

@section('contenido')
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">Información Atención Paciente "Clinica CTM"</div>
                    <div class="card-body p-0 m-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-condensed table-striped">
                                <thead class="bg-success">
                                    <tr>
                                        <th>N° Atención</th>
                                        <th>Fecha Atencíon</th>
                                        <th>Nombre Pacientes</th>
                                        <th>Nombre Medico</th>
                                        <th>Sintoma Pacientes</th>
                                        <th>Tratamiento Paciente</th>
                                        <th>Observaciones Paciente</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$atencion->id}}</td>
                                        <td>{{$atencion->fecha_atencion->format('d-m-Y')}}</td>
                                        <td>{{$atencion->ficha_pacientes->nombre_paciente}} {{$atencion->ficha_pacientes->apellido_paciente}}</td>
                                        <td>{{$atencion->users->nombre_medico}} {{$atencion->users->apellido_medico}}</td>
                                        <td>{{$atencion->sintomas_paciente}}</td>
                                        <td>{{$atencion->tratamiento_paciente}}</td>
                                        <td>{{$atencion->observaciones_paciente}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
            </div>
    </div>    
    
@endsection



{{-- @section('contenido')
<div class="col-md-8 offset-md-2"> 
        <div class="card card-widget">
            <div class="card-header">
                <div class="user-block">
                    <img class="img-circle" src="{{ asset('assets/img/user1-128x128.jpg') }}" alt="User Image">
                    <span class="username"></span>
                    <span class="description">Fecha Atención Paciente : {{$atencion->fecha_atencion->format('d-m-Y H:i:s')}}</span>
                </div> 
            </div>
            <div class="card-body">
                        <p><ul>
                                <li>
                                    <span >Datos Medico:{{$atencion->users->nombre_medico}} {{$atencion->users->apellido_medico}} </span>
                                    <a href="{{ route ('atencion.uss', ['atencion' => $atencion->id]) }}">Ver Ficha Medico</a>
                                </li>

                            </ul>
                        </p> 
                        <p>Sintomas Pacientes : {{$atencion->sintomas_paciente}}</p>
                        <p>Tratamiento Paciente : {{$atencion->tratamiento_paciente}}</p>
                        <p>Observaciones Pacientes : {{$atencion->observaciones_paciente}}</p>
                    <div class="card-footer">
                        
                    </div>
            </div>
        </div>
    </div>   

@endsection --}}