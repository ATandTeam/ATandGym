@extends('templates.base')
@section('titulo', 'Preinscripción')
@section('contenido')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Grupo</th>
            <th scope="col">Ver datos</th>
            <th scope="col">Editar datos</th>
            <th scope="col">Borrar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alumnas as $alumna)
        <tr>
            <td>{{ $alumna->nombre  }}</td>
            <td>{{ $alumna->aPaterno }} {{ $alumna->aMaterno }}</td>
            <td>{{ $alumna-> }}</td>

            <td></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
