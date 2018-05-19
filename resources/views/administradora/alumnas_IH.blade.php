@extends('templates.base')
@section('titulo', 'Ver Alumnas')
@section('contenido')
    <h>Alumnas Inscritas</h>
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center" scope="col">Nombre</th>
            <th class="text-center" scope="col">Grupo</th>
            <th class="text-center" scope="col">Ver datos</th>
            <th class="text-center" scope="col">Editar datos</th>
            <th class="text-center" scope="col">Borrar alumna</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inscripciones as $inscripcion)
            <tr>
                <td class="text-center">{{$inscripcion->antecedente->alumna->nombre}}</td>
                <td class="text-center">{{substr($inscripcion->grupo->hora,0,5)}}</td>
                {{--<td class="text-center"><a href="{{route('verAntecedentes',$inscripcion->antecedente->alumna->id)}}" class="btn btn-primary">Ver</a></td>--}}
                {{--<td class="text-center"><a href="{{route('cambiarStatus',$inscripcion->id)}}" class="btn btn-primary">Aprobar</a></td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>





    @endsection
