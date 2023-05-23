<div class="col-md-4">
        <div class="card card-danger ">
            <div class="card-header">
                <h3 class="card-title">Listado de Géneros</h3>
            </div>
            <div class="card-body p-0 m-0">
               <div class="table-responsive">
                <table class="table-table-hover table condensed">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($genero as $g)
                            <tr>
                                <td>{{ $g->nombre_genero }}</td>
                                <td>
                                    <a 
                                        href="{{ route('genero.edit', ['info'=>$g->id] ) }}" 
                                        class="btn btn-sm btn-success">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    @if( $g->trashed() )
                                    <a  
                                        href="{{ route('genero.restore', ['info'=>$g->id] ) }}" 
                                        class="btn btn-sm btn-warning">
                                        <i class="fas fa-undo"></i>
                                    </a>
                                        @else
                                        <a 
                                        href="{{ route('genero.delete', ['info'=>$g->id]) }}" 
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