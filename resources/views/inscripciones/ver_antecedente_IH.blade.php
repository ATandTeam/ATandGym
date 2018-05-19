@extends('templates.base')
@section('titulo', 'Preinscripción')
@section('contenido')
    <div class="row">
        <div class="col col-2"></div>
        <div class="col col-8">
            <h1>Antecedentes de {{$nombreAlumna}}</h1>
            <form>
                {{csrf_field()}} {{-- Para post --}}
                <div class="form-group">
                    <label for="antecedentes">¿Qué clase de ejercicio hacías?</label>
                    <input type="text" class="form-control" id="antecedentes"  name="ejercicio_anterior" readonly value="{{$antecedente->ejercicioAnterior}}">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Por qué quieres comenzar hacer ejercicio?</label>
                    <input type="text" class="form-control" id="antecedentes"  name="porque_ejercicio" readonly value="{{$antecedente->porqueEjercicio}}">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Tienes alguna enfermedad lesión o problema que le impida hacer algunos ejercicios?</label>
                    <input type="text" class="form-control" id="antecedentes"  name="tiene_lesion" readonly value="{{$antecedente->tieneLesion}}">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Llevas alguna dieta o régimen alimenticio?</label>
                    <input type="text" class="form-control" id="antecedentes"  name="alguna_dieta" readonly value="{{$antecedente->algunaDieta}}">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Acostumbras a tomar agua?</label>
                    <input type="text" class="form-control" id="antecedentes"  name="toma_agua" readonly value="{{$antecedente->tomaAgua}}">

                </div>
                <div class="form-group">
                    <label for="antecedentes">¿Tienes alguno de los siguientes problemas? Cardiovascular, hormonal, riñones, migraña, presión alta o baja, estrés, lesión rodilla, lesión columna, diabetes, varices, coxis desviado</label>
                    <input type="text" class="form-control" id="antecedentes"  name="problemas" readonly value="{{$antecedente->problemas}}">

                </div>
                <div class="d-flex align-content-center">
                    <a class="btn btn-secondary" href="{{route('confirmarInscripciones')}}">Volver</a>
                </div>
            </form>

        </div>
    </div>
@endsection