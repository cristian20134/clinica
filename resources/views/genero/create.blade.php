@extends('layouts.dashboard')

@section('titulo_pagina', 'Clinica CTM | Crear Género' )  
@section('titulo_seccion','Agregar Género')
  

@section('breadcrumb')
<li class="breadcrumb-item active">Agregar Género</li>
@endsection

@section('contenido')

    <div class="col-md-8">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Ingresar Nuevo Género</h3>
            </div>
            @include('genero.form.formGenero')

        </div>
    </div>

@include('genero.listas.listaGenero')


@endsection