@extends('templates.base')
@section('titulo','Ver Grupos')
@section('contenido')
    <div class="row">
        @foreach($grupos as $grupo)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><strong>hora: </strong>{{ $grupo->hora }}</h5>
                        <p class="card-text"><strong>cupo: </strong> {{ $grupo->cupo }}</p>
                        <p class="card-text"><strong>turno: </strong> {{ $grupo->turno }}</p>
                        <a href="#" class="btn btn-primary">Eliminar</a>
                        <a href="#" class="btn btn-primary">Editar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection