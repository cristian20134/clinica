@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro Médico</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombres Médico:</label>

                            <div class="col-md-6">
                                <input id="nombre_medico" type="text" class="form-control @error('nombre_medico') is-invalid @enderror" name="nombre_medico" value="{{ old('nombre_medico') }}" required autocomplete="nombre_medico" autofocus>

                                @error('nombre_medico') 
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Apellidos Médico:</label>

                            <div class="col-md-6">
                                <input id="apellido_medico" type="text" class="form-control @error('apellido_medico') is-invalid @enderror" name="apellido_medico" value="{{ old('apellido_medico') }}" required autocomplete="apellido_medico" autofocus>

                                @error('apellido_medico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Especialidad Médico:</label>

                            <div class="col-md-6">
                                <select id="especialidad_medico" type="text" class="form-control @error('especialidad_medico') is-invalid @enderror" name="especialidad_medico" value="{{ old('especialidad_medico') }}" required autocomplete="especialidad_medico" autofocus>>
                                <option value="">Seleccione una Opción</option>
                                <option value="Ginecología">Ginecología</option>
                                <option value="traumatologo">Traumatología</option>
                                <option value="Medicina General">Medicina General</option>
                                <option value="Odontologia">Odontología</option>
                                <option value="Pediatria">Pediatría</option>
                                <option value="Cardiologia">Cardiología</option>
                                <option value="Psicologia">Psicología</option>
                                 </select>
                                @error('especialidad_medico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Correo Electrónico:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Fecha Nacimiento:</label>

                            <div class="col-md-6">
                                <input id="fnacimiento" type="text" class="form-control @error('fnacimiento') is-invalid @enderror" name="fnacimiento" value="{{ old('fnacimiento') }}" required autocomplete="fnacimiento" autofocus>

                                @error('fnacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirme Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
