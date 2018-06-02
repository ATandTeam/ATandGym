@extends('templates.base')
@section('titulo','Crear Grupo')
@section('contenido')
    <div class="row">
        <div class="col col-3"></div>
        <div class="col col-6">
            <h1>Crear grupo</h1>
            <form action="{{route('grupos.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="hora">Hora</label>
                        <input type="text" class="form-control hora" id="hora" title="00:00 - 23:59" value="{{old('hora')}}" required pattern="[0-2][0-9]:[0-5][0-9]" name="hora">
                    </div>
                    <div class="form-group">
                        <label for="cupo">Cupo</label>
                        <input type="text" class="form-control cupo" id="cupo"  value="{{old('cupo')}}"  pattern="[0-9][0-9]" maxlength="2" size="2" title="00 - 99" required min="1" max="99" name="cupo">
                    </div>
                    <br>
                    <a href="{{route('grupos.index')}}" class="btn btn-secondary">Cancelar</a>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>
            </div>
        </div>
    @if($errors->count() > 0)
    @section('js')
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
    @endsection
    @endif
@endsection