@extends('layouts.dashboard')

@section('titulo_pagina', 'Clinica CTM | Editar Género' )  
@section('titulo_seccion','Editar Género')
  
@section('breadcrumb')
<li class="breadcrumb-item active">Editar Género</li>
@endsection

@section('contenido')

    <div class="col-md-8">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Formulario de Edición</h3>
            </div>
            @include('genero.form.formGenero')
            {{--<form method="POST" action="{{ route('genero.update', ['info'=>$info->id]) }}">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        <label class="@error('nombre_genero') text-danger @enderror" for="nombre_genero">Nombre Género</label>
                        <input 
                            type="text"  
                            name="nombre_genero" 
                            class="form-control @error('nombre_genero') is-invalid @enderror" 
                            id="nombre_genero" placeholder="Ingrese Género" 
                            value="{{ old('nombre_genero') ?: $info->nombre_genero }}">
                            @error('nombre_genero')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>    
                </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Editar</button>
                    </div>
            </form>--}}
        </div>
    </div>
    @include('genero.listas.listaGenero')
    {{--<div class="col-md-4">
        <div class="card card-danger ">
            <div class="card-header">
                <h3 class="card-title">Listado de Géneros</h3>
            </div>
            <div class="card-body">
                <ul>
                    @foreach($genero as $g)
                        <li class="py-2">
                            {{ $g->nombre_genero }} <span class="mr-3"></span>
                            <a 
                                href="{{ route('genero.edit', ['info'=>$g->id] ) }}" 
                                class="btn btn-sm btn-success">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a 
                                href="" 
                                class="btn btn-sm btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </li>
                    @endforeach    
                </ul>

            </div>
        </div>

    </div>}}--}}


@endsection