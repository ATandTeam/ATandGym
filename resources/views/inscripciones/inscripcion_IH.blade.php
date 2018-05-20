@extends('templates.base')
@section('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
@endsection
@section('titulo', 'Antecedentes')
@section('contenido')

<h1>Inscribite a un grupo </h1>
<table class="table table-hover">
    <thead>
    <tr>
        <th class="text-center" scope="col">Grupo</th>
        <th class="text-center" scope="col">Cupo total</th>
        <th class="text-center" scope="col">Inscribirse</th>

    </tr>
    </thead>
    <tbody>
    @foreach($grupos as $grupo)
    <tr>
        <td class="text-center">{{substr($grupo->hora,0,5)}}</td>
        <td class="text-center">{{$grupo->cupo}}</td>
        <td class="text-center">
            <a class="btn btn-primary" href="{{route('guardarGrupo',$grupo->id)}}">Seleccionar</a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
    <div class="d-flex justify-content-center">
        <a style="font-size: 36px" class="text-dark" href="{{route('home')}}"><i class="fas fa-arrow-circle-left"> Volver</i></a>
    </div>
@endsection

