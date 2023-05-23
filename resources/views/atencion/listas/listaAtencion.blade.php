<div class="col-md-4">
    <div class="card card-danger ">
        <div class="card-header">
            <h3 class="card-title">Listado de Atenciones</h3>
        </div>
        <div class="card-body p-0 m-0">
           <div class="table-responsive">
            <table class="table-table-hover table condensed">
                <thead>
                    <tr>
                        <th>N° Atención</th>
                        <th>Paciente</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->ficha_pacientes->nombre_paciente }}</td>
                            <td>
                                <a
                                    href="{{ route('atencion.edit', ['atencion'=>$a->id] ) }}"
                                    class="btn btn-sm btn-success">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                @if( $a->trashed() )
                                <a
                                    href="{{ route('atencion.restore', ['atencion'=>$a->id] ) }}"
                                    class="btn btn-sm btn-warning">
                                    <i class="fas fa-undo"></i>
                                </a>
                                    @else
                                    <a
                                    href="{{ route('atencion.delete', ['atencion'=>$a->id]) }}"
                                    class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                @endif
                            </td>
                        </tr>
                     @endforeach
                </tbody>
            </table>
           </div>
        </div>
    </div>

</div>
