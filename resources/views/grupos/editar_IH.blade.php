@extends('templates.base')
@section('titulo','Editar Grupo')
@section('contenido')
    @php
        $turnoActual = $grupo->turno;
        $turno = ['',''];
    if ($turnoActual == 'matutino'){
        $turno[0] = 'checked';
    }
    else{
        $turno[1] = 'checked';
    }

    @endphp
    <div class="row">
        <div class="col col-3"></div>
        <div class="col col-6">
            <h1>Editar grupo</h1>
            <form action="{{route('grupos.update',$grupo->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="form-group">
                    <label for="hora">Hora</label>
                    <input type="text" class="form-control" id="hora" title="00:00 - 23:59" placeholder="HH:MM" value="{{old('hora',substr($grupo->hora,0,5))}}" required pattern="[0-2][0-9]:[0-5][0-9]" name="hora">
                </div>
                <div class="form-group">
                    <label for="cupo">Cupo</label>
                    <input type="text" class="form-control" id="cupo" placeholder="00" value="{{old('cupo',$grupo->cupo)}}"  pattern="[0-9][0-9]" maxlength="2" size="2" title="00 - 99" required min="1" max="99" name="cupo">
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="turno" id="turno" value="matutino" {{$turno[0]}}>
                    <label class="form-check-label" for="turno">
                        matutino
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="turno" id="turno1" value="vespertino" {{$turno[1]}}>
                    <label class="form-check-label" for="turno1">
                        vespertino
                    </label>
                </div>
                <br>
                <br>
                <a href="{{route('grupos.index')}}" class="btn btn-success">Cancelar</a>
                <input type="submit" value="Guardar" class="btn btn-primary">
            </form>
        </div>
    </div>
@section('js')
    @if($errors->count() > 0)
        {{'HOLA'}}
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