<form
    method="POST"
    action="{{ !$atencion->id ? route('atencion.store') : route('atencion.update', ['atencion'=>$atencion->id]) }}"
    >
                <div class="card-body">
                @csrf
                @if ($atencion->id)
                    @method('PUT')
                @endif

                    <div class="form-group">
                        <label class="@error('select_ficha') text-danger @enderror" for="select_salud">Nombre Pacientes</label>
                        <select name="select_ficha" id="select_ficha" class="form-control @error('select_ficha') is-invalid @enderror">
                            <option value="">Seleccione un Paciente</option>
                            @foreach($ficha as $f)
                            <option value="{{$f->id}}"
                            {{ ( (int) old('select_ficha') === $f->id or (int) $atencion->ficha_pacientes_id === $f->id)? 'selected' : ''}}>{{$f->nombre_paciente}} {{$f->apellido_paciente}}</option>
                            @endforeach
                        </select>
                            @error('select_ficha')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('select_medico') text-danger @enderror" for="select_salud">Nombre Médicos</label>
                        <select name="select_medico" id="select_medico" class="form-control @error('select_medico') is-invalid @enderror">
                            <option value="">Seleccione un Médico</option>
                            @foreach($medico as $m)
                            <option value="{{$m->id}}"
                            {{ ( (int) old('select_medico') === $m->id or (int) $atencion->users_id === $m->id)? 'selected' : ''}}>{{$m->nombre_medico}} {{$m->apellido_medico}}</option>
                            @endforeach
                        </select>
                            @error('select_medico')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('sintomas_paciente') text-danger @enderror" for="sintomas_paciente">Sintomas del Paciente</label>
                        <textarea
                            class="form-control @error('sintomas_paciente') is-invalid @enderror"
                            name="sintomas_paciente"
                            id="sintomas_paciente"
                            cols="30"
                            rows="05"
                            style="resize : none;">{{ old('sintomas_paciente') ?: $atencion->sintomas_paciente }}
                        </textarea>
                            @error('sintomas_paciente')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('tratamiento_paciente') text-danger @enderror" for="tratamiento_paciente">Tratamiento del Paciente</label>
                        <textarea
                            class="form-control @error('tratamiento_paciente') is-invalid @enderror"
                            name="tratamiento_paciente"
                            id="tratamiento_paciente"
                            cols="30"
                            rows="05"
                            style="resize : none;">{{ old('tratamiento_paciente') ?: $atencion->tratamiento_paciente }}
                        </textarea>
                            @error('tratamiento_paciente')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('observaciones_paciente') text-danger @enderror" for="observaciones_paciente">Observaciones del Paciente</label>
                        <textarea
                            class="form-control @error('observaciones_paciente') is-invalid @enderror"
                            name="observaciones_paciente"
                            id="observaciones_paciente"
                            cols="30"
                            rows="05"
                            style="resize : none;">{{ old('observaciones_paciente') ?: $atencion->observaciones_paciente }}
                        </textarea>
                            @error('observaciones_paciente')
                                <span class="error invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label class="@error('fecha_atencion') text-danger @enderror" for="fecha">Fecha Atención</label>
                        <input
                            type="date"
                            name="fecha_atencion"
                            class="form-control @error('fecha_atencion') is-invalid @enderror"
                            id="fecha_atencion"
                            placeholder="Formato aaaa-mm-dd"
                            value="{{ old('fecha_atencion') ?: ($atencion->id ? $atencion->fecha_atencion->format('Y-m-d H:i:s' ) : "") }}">
                            @error('fecha_atencion')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">
                    {{ $atencion->id ? "Modificar Atención" : "Crear Nueva Atención"}}
                  </button>
                  <a href="{{ route('atencion.create') }}" class="btn btn-primary">Agregar Nueva Atención</a>

                </div>
              </form>
