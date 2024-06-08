@extends('layouts.app')

@section('title', 'Registro')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-md-8 ">
                <div class="card border-secondary">
                    <div class="card-header bg-primary text-white">Nuevo registro</div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" tabindex="1">
                            </div>

                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" tabindex="1">
                            </div>

                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="text" class="form-control" id="edad" name="edad" tabindex="1">
                            </div>

                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" class="form-control" id="dni" name="dni" tabindex="1">
                            </div>

                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" tabindex="1">
                            </div>

                            <div class="mb-3">
                                <label for="estadocivil" class="form-label">Estado civil</label>
                                <select class="form-select" name="estadocivil" id="estadocivil">
                                    <option value="soltero" selected>Soltero</option>
                                    <option value="casado">Casado</option>
                                    <option value="divorciado">Divorciado</option>
                                    <option value="divorciado">Divorciado</option>
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
