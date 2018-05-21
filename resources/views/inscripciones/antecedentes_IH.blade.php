@extends('templates.base')
@section('titulo', 'Antecedente')
@section('contenido')
    <div class="row">
        <div class="col col-2"></div>
        <div class="col col-8">
            <h1>Antecedentes de salud y fisica</h1>
            <form action="{{route('inscripciones.store')}}" method="post">
                {{csrf_field()}} {{-- Para post --}}
                <div class="form-group">
                    <label for="antecedentes">¿Qué clase de ejercicio hacías?</label>
                    <input value="{{old('ejercicio_anterior')}}" type="text" class="form-control" id="antecedentes"  name="ejercicio_anterior">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Por qué quieres comenzar hacer ejercicio?</label>
                    <input value="{{old('porque_ejercicio')}}" type="text" class="form-control" id="antecedentes"  name="porque_ejercicio">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Tienes alguna enfermedad lesión o problema que le impida hacer algunos ejercicios?</label>
                    <input value="{{old('tiene_lesion')}}" type="text" class="form-control" id="antecedentes"  name="tiene_lesion">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Llevas alguna dieta o régimen alimenticio?</label>
                    <input value="{{old('alguna_dieta')}}" type="text" class="form-control" id="antecedentes"  name="alguna_dieta">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Acostumbras a tomar agua?</label>
                    <input value="{{old('toma_agua')}}" type="text" class="form-control" id="antecedentes"  name="toma_agua">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Tienes alguno de los siguientes problemas? Cardiovascular, hormonal, riñones, migraña, presión alta o baja, estrés, lesión rodilla, lesión columna, diabetes, varices, coxis desviado</label>
                    <input value="{{old('problemas')}}" type="text" class="form-control" id="antecedentes"  name="problemas">

                </div>
                <div class="d-flex justify-content-center">                    
                    <a class="btn btn-secondary mr-2" href="javascript:history.back()" >Regresar</a>
                    <input type="submit" value="Guardar" class="btn-primary btn">
                </div>
            </form>

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