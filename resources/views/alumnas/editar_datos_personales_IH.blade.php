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
                    <div class="card-header">Modificar datos personales</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('actualizardatospersonales',$alumna->id) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input  id="name" type="text" class="form-control" name="nombre" value="{{$alumna->nombre}}" required>



                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="apellido_paterno" class="col-md-4 col-form-label text-md-right">Apellido Paterno</label>

                                <div class="col-md-6">
                                    <input  id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{old('apellido_paterno',$alumna->aPaterno)}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="apellido_materno" class="col-md-4 col-form-label text-md-right">Apellido Materno</label>

                                <div class="col-md-6">
                                    <input  id="apellido_materno" type="text" class="form-control" name="apellido_materno" value="{{old('apellido_materno',$alumna->aMaterno)}} "required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input  id="direccion" type="text" class="form-control" name="direccion" value="{{old('direccion',$alumna->direccion)}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                                <div class="col-md-6">
                                    <input  id="telefono" type="text" class="form-control" name="telefono" value="{{old('telefono',$alumna->telefono)}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>
                                <div class="col-md-6">
                                    <input  id="fecha_nacimiento" type="text" class="form-control fecha" name="fecha_nacimiento" value="{{old('fecha_nacimiento',date('d/m/Y',strtotime($alumna->fechaNacimiento)))}}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="colonioa" class="col-md-4 col-form-label text-md-right">Colonia</label>

                                <div class="col-md-6">
                                    <input  id="colonia" type="text" class="form-control" name="colonia" value="{{old('colonia',$alumna->colonia)}}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <input  id="ciudad" type="text" class="form-control" name="ciudad" value="{{old('ciudad',$alumna->ciudad)}}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

                                <div class="col-md-6">
                                    <input  id="estado" type="text" class="form-control" name="estado" value="{{old('estado',$alumna->estado)}}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="profesion" class="col-md-4 col-form-label text-md-right">Profesion</label>

                                <div class="col-md-6">
                                    <input  id="profesion" type="text" class="form-control" name="profesion" value="{{old('profesion',$alumna->profesion)}}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route(Auth::user()->id != 9999999 ? 'datospersonales' : 'veralumnasinscritas',Auth::user()->id != 9999999 ? Auth::user()->id : '') }}" class="btn btn-secondary">Regresar</a>
                                    <button type="submit" class="btn btn-primary">
                                        Guardar cambios
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('js')
        @if($errors->count() > 0)
            @php
                $errores = '';
            @endphp
            @foreach($errors->all() as $error)
                @php
                    $errores.=$error.'\n';
                @endphp
            @endforeach
            <script>
                swal("Ups hay un problema :(",""+"{{$errores}}", "error");
            </script>
        @endif
    @endsection

@endsection
