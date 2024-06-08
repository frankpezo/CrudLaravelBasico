@extends('layouts.app')

@section('title', 'Registro')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-md-8 ">
                <div class="card border-secondary">
                    <div class="card-header bg-dark text-white">Nuevo registro</div>
                    <div class="card-body">
                        <form action="{{ route('user.register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="{{ old('nombre') }}" tabindex="1">
                            </div>
                            @error('nombre')
                                <p class="alert alert-danger"> Por favor, ingrese su nombre</p>
                            @enderror

                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido"
                                    value="{{ old('apellido') }}" tabindex="1">
                            </div>
                            @error('apellido')
                                <p class="alert alert-danger"> Por favor, ingrese su apellido</p>
                            @enderror

                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="text" class="form-control" id="edad" name="edad"
                                    value="{{ old('edad') }}" tabindex="1">
                            </div>
                            @error('edad')
                                <p class="alert alert-danger"> Por favor, ingrese su edad</p>
                            @enderror

                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" class="form-control" id="dni" name="dni"
                                    value="{{ old('dni') }}" tabindex="1">
                            </div>
                            @error('dni')
                                <p class="alert alert-danger"> Por favor, ingrese su dni (8 dig.)</p>
                            @enderror


                            <div class="mb-3">
                                <label for="estadocivil" class="form-label">Estado civil</label>
                                <select class="form-select" name="estadocivil" id="estadocivil">
                                    <option value="soltero" {{ old('estadocivil') == 'soltero' ? 'selected' : '' }}>
                                        Soltero(a)
                                    </option>
                                    <option value="casado" {{ old('estadocivil') == 'casado' ? 'selected' : '' }}>Casado(a)
                                    </option>
                                    <option value="divorciado" {{ old('estadocivil') == 'divorciado' ? 'selected' : '' }}>
                                        Divorciado(a)</option>
                                    <option value="viudo" {{ old('estadocivil') == 'viudo' ? 'selected' : '' }}>
                                        Viudo(a)</option>
                                </select>
                            </div>

                            <input type="submit" class="btn btn-primary mt-5 " value="Registrar">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
