@extends('layouts.dashboard')

@section('titulo_pagina')
    Clinica CTM | Home
@endsection

@section('titulo_seccion')
    Inicio
@endsection

@section('breadcrumb')
{{-- <li class="breadcrumb-item active">Starter Page</li> --}}
@endsection

@section('contenido')
    <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Información Atención Paciente "Clinica CTM"</div>
                    <div class="card-body p-0 m-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-condensed table-striped">
                                <thead class="bg-secondary">
                                    <tr>
                                        <th>N° Atención</th>
                                        <th>Nombre Pacientes</th>
                                        <th>Fecha Atención</th>
                                        <th>Atención</th>
                                        <th>Ficha</th>
                                        <th>Medico</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($atencion as $b)
                                    <tr>
                                        <td>{{$b->id}}</td>
                                        <td>{{$b->ficha_pacientes->nombre_paciente}} {{$b->ficha_pacientes->apellido_paciente}}</td>
                                        <td>{{$b->created_at->format('d-m-Y H:i:s')}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a
                                                    href="{{ route ('atencion.show', ['atencion' => $b->id]) }}"
                                                    type="button"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fas fa-search"></i>
                                                </a >
                                                <a
                                                    href="{{ route ('atencion.edit', ['atencion' => $b->id]) }}"
                                                    type="button"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a >

                                                {{--@if ($b->trashed())
                                                <a
                                                href="{{ route('atencion.restore', ['atencion'=>$b->id]) }}"
                                                class="btn btn-sm btn-danger">
                                                <i class="fas fa-undo"></i>
                                                </a>
                                                @else--}}
                                                    <a
                                                     href="{{ route('atencion.delete', ['atencion'=>$b->id]) }}"
                                                     class="btn btn-sm btn-danger">
                                                     <i class="fas fa-trash-alt"></i>
                                                     </a>
                                                {{--@endif--}}

                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                 <a
                                                    href="{{ route ('atencion.add', ['atencion' => $b->id]) }}"
                                                    type="button"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fas fa-search"></i>
                                                </a >
                                                {{--<a
                                                    href="{{ route ('ficha.edit', ['info' => $a->id]) }}"
                                                    type="button"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a >--}}

                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                 <a
                                                    href="{{ route ('atencion.uss', ['atencion' => $b->id]) }}"
                                                    type="button"
                                                    class="btn btn-sm btn-info">
                                                    <i class="fas fa-user-md"></i>
                                                </a >
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        {{$atencion->links()}}
                    </div>
            </div>
    </div>

@endsection



