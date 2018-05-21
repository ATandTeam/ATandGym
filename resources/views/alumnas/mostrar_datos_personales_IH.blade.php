
@extends('templates.base')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form-elements.css') }}">
@endsection
@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Datos personales</div>

                    <div class="card-body">
                        <form method="GET" action="{{ route('modificardatospersonales',$alumna->id) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input readonly id="name" type="text" class="form-control" name="name" value="{{$alumna->nombre}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="apellido_paterno" class="col-md-4 col-form-label text-md-right">Apellido Paterno</label>

                                <div class="col-md-6">
                                    <input readonly id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{$alumna->aPaterno}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="apellido_materno" class="col-md-4 col-form-label text-md-right">Apellido Materno</label>

                                <div class="col-md-6">
                                    <input readonly id="apellido_materno" type="text" class="form-control" name="apellido_materno" value="{{$alumna->aMaterno}}"required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

                                <div class="col-md-6">
                                    <input readonly id="email" type="email" class="form-control" name="email" value="{{$usuario->email}}" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input readonly id="direccion" type="text" class="form-control" name="direccion" value="{{$alumna->direccion}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                                <div class="col-md-6">
                                    <input readonly id="telefono" type="text" class="form-control" name="telefono" value="{{$alumna->telefono}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">Cumpleaños</label>

                                <div class="col-md-6">
                                    <input readonly id="fechaNacimiento" type="text" class="form-control" name="fechaNacimiento" value="{{$alumna->fechaNacimiento}}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="colonioa" class="col-md-4 col-form-label text-md-right">Colonia</label>

                                <div class="col-md-6">
                                    <input readonly id="colonia" type="text" class="form-control" name="colonia" value="{{$alumna->colonia}}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <input readonly id="ciudad" type="text" class="form-control" name="ciudad" value="{{$alumna->ciudad}}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

                                <div class="col-md-6">
                                    <input readonly id="estado" type="text" class="form-control" name="estado" value="{{$alumna->estado}}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="profesion" class="col-md-4 col-form-label text-md-right">Profesion</label>

                                <div class="col-md-6">
                                    <input readonly id="profesion" type="text" class="form-control" name="profesion" value="{{$alumna->profesion}}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">    
                                    <a href="{{ route('home') }}" class="btn btn-primary">Regresar</a>                          
                                    <button type="submit" class="btn btn-primary">
                                        Modificar
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
