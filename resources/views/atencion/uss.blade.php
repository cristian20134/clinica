@extends('layouts.dashboard')

@section('titulo_pagina')
    Clinica CTM | Home
@endsection

@section('titulo_seccion')
    Ficha Medico
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Ficha Medico</li>
@endsection

@section('contenido')
    <div class="col-md-8 offset-md-2"> 
        <div class="card card-widget">
            <div class="card-header bg-success">
                <div class="user-block">
                    <img class="img-circle" src="{{ asset('assets/img/user1-128x128.jpg') }}" alt="User Image">
                    <span class="username">"Clinica CTM" Informacion Médico</span>
                    <span class="username">Identificación Médico N° {{$atencion->users->id}} </span>
                </div> 
            </div>
            <div class="card-body">
                <ul>
                    <li><span style="font-weight: bold;">Nombre Medico :</span> {{$atencion->users->nombre_medico}} {{$atencion->users->apellido_medico}}</li>
                    <li><span style="font-weight: bold;">Especialidad Medico :</span> {{$atencion->users->especialidad_medico}}</li>
                    <li><span style="font-weight: bold;">Correo Eléctronico :</span> {{$atencion->users->email}}</li>
                    <li><span style="font-weight: bold;">Fecha Nacimiento :</span>{{$atencion->users->fnacimiento}}</li>
                </ul>             
            </div>
        </div>
    </div>   
@endsection


