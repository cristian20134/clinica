@extends('layouts.dashboard')

@section('titulo_pagina', )
    Clinica CTM | Editar Ficha Paciente
@endsection

@section('titulo_seccion','Editar Ficha Paciente')


@section('breadcrumb')
<li class="breadcrumb-item active">Modificacion Ficha Paciente</li>
@endsection

@section('contenido')

    {{--<div class="col-md-10 offset-md-1">--}}
    <div class="col-md-8">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Formulario Editar Paciente</h3>
              </div>
              @include('ficha.forms.formFicha')

              {{--<form method="POST" action="{{ route('ficha.update', ['ficha'=>$ficha->id]) }}">
                <div class="card-body">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label class="@error('nombre_paciente') text-danger @enderror" for="nombre_paciente">Nombre Paciente</label>
                        <input
                            type="text"
                            name="nombre_paciente"
                            class="form-control @error('nombre_paciente') is-invalid @enderror"
                            id="nombre_paciente" placeholder="Ingrese Nombre Paciente"
                            value="{{ old('nombre_paciente') ?: $ficha->nombre_paciente }}">
                            @error('nombre_paciente')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('apellido_paciente') text-danger @enderror"for="apellido_paciente">Apellido Paciente</label>
                        <input
                            type="text"
                            name="apellido_paciente"
                            class="form-control @error('apellido_paciente') is-invalid @enderror"
                            id="apellido_paciente"
                            placeholder="Ingrese Apellido Paciente"
                            value="{{ old('apellido_paciente') ?: $ficha->apellido_paciente }}">
                            @error('apellido_paciente')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('telefono_paciente') text-danger @enderror" for="telefono_paciente">Teléfono Paciente</label>
                        <input
                            type="text"
                            name="telefono_paciente"
                            class="form-control @error('telefono_paciente') is-invalid @enderror"
                            id="telefono_paciente"
                            placeholder="Ingrese Telefono Paciente"
                            value="{{ old('telefono_paciente') ?: $ficha->telefono_paciente }}">
                            @error('telefono_paciente')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('select_salud') text-danger @enderror" for="select_salud">Sistema Salud Paciente</label>
                        <select name="select_salud" id="select_salud" class="form-control @error('select_salud') is-invalid @enderror">
                            <option value="">Seleccione una Opción</option>
                            @foreach($sistema as $s)
                            <option value="{{$s->id}}"
                            {{ ( (int) old('select_salud') === $s->id or (int) $ficha->sistema_saluds_id === $s->id )? 'selected' : ''}}>{{$s->nombre_sistema_salud}}</option>
                            @endforeach
                        </select>
                            @error('select_salud')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror

                    </div>

                    <div class="form-group">
                        <label class="@error('select_genero') text-danger @enderror" for="select_genero">Género Paciente</label>
                        <select name="select_genero" id="select_genero" class="form-control @error('select_genero') is-invalid @enderror">
                            <option value="">Seleccione una Opción</option>
                            @foreach($genero as $g)
                            <option value="{{$g->id}}"
                            {{ ( (int) old('select_genero') === $g->id or (int) $ficha->genero_pacientes_id === $g->id)? 'selected' : ''}}>{{$g->nombre_genero}}</option>
                            @endforeach
                        </select>
                            @error('select_genero')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('select_ciudad') text-danger @enderror" for="select_ciudad">Cuidad Paciente</label>
                        <select name="select_ciudad" id="select_ciudad" class="form-control @error('select_ciudad') is-invalid @enderror">
                            <option value="">Seleccione una Opción</option>
                            @foreach($ciudad as $ci)
                            <option value="{{$ci->id}}"
                            {{ ( (int) old('select_ciudad') === $ci->id or (int) $ficha->ciudad_pacientes_id === $ci->id)? 'selected' : ''}}>{{$ci->nombre_ciudad}}</option>
                            @endforeach
                        </select>
                            @error('select_ciudad')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('direccion_paciente') text-danger @enderror" for="direccion_paciente">Dirección Paciente</label>
                        <input
                            type="text"
                            name="direccion_paciente"
                            class="form-control @error('direccion_paciente') is-invalid @enderror"
                            id="direccion_paciente"
                            placeholder="Ingrese Dirección Paciente"
                            value="{{ old('direccion_paciente') ?: $ficha->direccion_paciente }}">
                            @error('direccion_paciente')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('correo_paciente') text-danger @enderror" for="correo_paciente">Correo Electrónico</label>
                        <input
                            type="email"
                            name="correo_paciente"
                            class="form-control @error('correo_paciente') is-invalid @enderror"
                            id="correo_paciente"
                            placeholder="Ingrese Correo Electronico"
                            value="{{ old('correo_paciente') ?: $ficha->correo_paciente }}">
                            @error('correo_paciente')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('fecha_nacimiento') text-danger @enderror" for="fecha_nacimiento">Fecha Nacimiento Paciente</label>
                        <input
                            type="date"
                            name="fecha_nacimiento"
                            class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                            id="fecha_nacimiento"
                            placeholder="Formato aaaa-mm-dd"
                            value="{{ old('fecha_nacimiento') ?: $ficha->fecha_nacimiento}}">
                            @error('fecha_nacimiento')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Editar Ficha</button>
                </div>
              </form>--}} {{--cortado o pegado enviado a formFicha.blade.php--}}
        </div>
    </div>
    @include('ficha.listas.listaFicha')

@endsection
