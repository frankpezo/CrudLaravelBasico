@extends('layouts.app')

@section('title', 'Registro')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-md-8 ">
                <div class="card border-secondary">
                    <div class="card-header bg-dark text-white">Modificar información</div>
                    <div class="card-body">
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="{{ $user->nombre }}" tabindex="1">
                            </div>
                            @error('nombre')
                                <p class="alert alert-danger"> Por favor, ingrese su nombre</p>
                            @enderror

                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido"
                                    value="{{ $user->apellido }}" tabindex="1">
                            </div>
                            @error('apellido')
                                <p class="alert alert-danger"> Por favor, ingrese su apellido</p>
                            @enderror

                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="text" class="form-control" id="edad" name="edad"
                                    value="{{ $user->edad }}" tabindex="1">
                            </div>
                            @error('edad')
                                <p class="alert alert-danger"> Por favor, ingrese su edad</p>
                            @enderror

                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" class="form-control" id="dni" name="dni"
                                    value="{{ $user->dni }}" tabindex="1">
                            </div>
                            @error('dni')
                                <p class="alert alert-danger"> Por favor, ingrese su dni (8 dig.)</p>
                            @enderror


                            <div class="mb-3">
                                <label for="estadocivil" class="form-label">Estado civil</label>
                                <select class="form-select" name="estadocivil" id="estadocivil">
                                    <option value="soltero"
                                        {{ old('estadocivil', $user->estadocivil) == 'soltero' ? 'selected' : '' }}>
                                        Soltero(a)
                                    </option>
                                    <option value="casado"
                                        {{ old('estadocivil', $user->estadocivil) == 'casado' ? 'selected' : '' }}>
                                        Casado(a)
                                    </option>
                                    <option value="divorciado"
                                        {{ old('estadocivil', $user->estadocivil) == 'divorciado' ? 'selected' : '' }}>
                                        Divorciado(a)
                                    </option>
                                    <option value="viudo"
                                        {{ old('estadocivil', $user->estadocivil) == 'viudo' ? 'selected' : '' }}>
                                        Viudo(a)
                                    </option>
                                </select>
                            </div>

                            <input type="submit" class="btn btn-warning mt-5 text-white" value="Modificar">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
