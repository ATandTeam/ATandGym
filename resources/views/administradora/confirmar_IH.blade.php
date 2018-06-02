@extends('templates.base')
@section('titulo', 'Confirmar Inscripciones')
@section('contenido')

    <h1>Inscripciones solicitadas </h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center" scope="col">Nombre</th>
            <th class="text-center" scope="col">Grupo</th>
            <th class="text-center" scope="col">Antecedentes</th>
            <th class="text-center" scope="col">Aprobar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inscripciones as $inscripcion)
            <tr>
                <td class="text-center">{{$inscripcion->antecedente->alumna->nombre}}</td>
                <td class="text-center">{{substr($inscripcion->grupo->hora,0,5)}} hrs</td>
                <td class="text-center"><a href="{{route('verAntecedentes',$inscripcion->antecedente->alumna->id)}}" class="btn btn-primary">Ver</a></td>
                <td class="text-center">
                    <form action="{{route('cambiarStatus',$inscripcion->id)}}" method="post">
                        @csrf
                        <input class="btn btn-primary" type="submit" value="Aprobar">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <a class="btn btn-secondary" href="{{route('home')}}">Regresar</a>
    </div>    
    @section('js')
        @isset ($cupomaximo)
            <script>
                swal("Cupo excedido",'El grupo ya tiene el cupo máximo','error');
            </script>
        @endisset
    @endsection

@endsection

