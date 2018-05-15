@extends('templates.base')
@section('titulo', 'Preinscripción')
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
        <td class="text-center">{{$grupo->hora}}</td>
        <td class="text-center">{{$grupo->cupo}}</td>
        <td class="text-center">
            <input class="form-check-input" type="radio" name="grupo" id="okok" value="option1" checked>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>






@endsection

