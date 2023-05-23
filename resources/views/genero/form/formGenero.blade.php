<form 
    method="POST" 
    action="{{ !$info->id ? route('genero.store') : route('genero.update', ['info'=>$info->id]) }}"
    >
                <div class="card-body">
                    @csrf
                    @if ( $info->id)
                     @method ('PUT')
                    @endif

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
                        <button type="submit" class="btn btn-info">
                            {{$info->id ? "Actualizar" : "Agregar"}}
                        </button>
                        @if ($info->id)
                            <a href="{{ route('genero.create') }}" class="btn btn-primary">Crear Nuevo Genero</a>
                        @endif
                    </div>
</form>