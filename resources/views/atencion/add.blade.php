@extends('layouts.dashboard')

@section('titulo_pagina')
    Clinica CTM | Home
@endsection

@section('titulo_seccion')
    Ficha Paciente
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Ficha Paciente</li>
@endsection

@section('contenido')
    <div class="col-md-8 offset-md-2">
        <div class="card card-widget">
            <div class="card-header bg-success">
                <div class="user-block">
                    <img class="img-circle" src="{{ asset('assets/img/user1-128x128.jpg') }}" alt="User Image">
                    <span class="username">Atencion Paciente "Clinica CTM" N°{{$atencion->id}} </span>
                    <span class="username">Informacion Paciente</span>
                </div>
            </div>
            <div class="card-body">
                <ul>
                    <li><span style="font-weight: bold;">Nombre Paciente :</span> {{$atencion->ficha_pacientes->nombre_paciente}} {{$atencion->ficha_pacientes->apellido_paciente}}</li>
                    <li><span style="font-weight: bold;">Género Paciente :</span> {{$atencion->ficha_pacientes->genero_pacientes->nombre_genero}}</li>
                    <li><span style="font-weight: bold;">Telefono Paciente :</span> {{$atencion->ficha_pacientes->telefono_paciente}}</li>
                    <li><span style="font-weight: bold;">Correo Eléctronico :</span> {{$atencion->ficha_pacientes->correo_paciente}}</li>
                    <li><span style="font-weight: bold;">Ciudad Paciente :</span> {{$atencion->ficha_pacientes->ciudad_pacientes->nombre_ciudad}}</li>
                    <li><span style="font-weight: bold;">Dirección Paciente :</span> {{$atencion->ficha_pacientes->direccion_paciente}}</li>
                    <li><span style="font-weight: bold;">Sistema Salud :</span> {{$atencion->ficha_pacientes->sistema_saluds->nombre_sistema_salud}}</li>
                    <li><span style="font-weight: bold;">Fecha Nacimiento :</span>{{$atencion->ficha_pacientes->fecha_nacimiento}}</li>
                </ul>

                    <div class="attachment-block clearfix">
                        <img class="attachment-img" src="{{ asset('assets/img/photo1.png') }}" alt="Attachment Image">                       <!-- /.attachment-pushed -->
                    </div>
            </div>
        </div>
    </div>
@endsection
