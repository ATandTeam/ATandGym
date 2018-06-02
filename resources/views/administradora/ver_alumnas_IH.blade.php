@extends('templates.base')
@section('titulo', 'Ver Alumnas')
@section('contenido')
    <h1>Alumnas Inscritas</h1>
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="text-center" scope="col">Nombre</th>
            <th class="text-center" scope="col">Grupo</th>
            <th class="text-center" scope="col">Editar datos personales</th>
            <th class="text-center" scope="col">Borrar inscripción</th>
            <th class="text-center" scope="col">Borrar alumna</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inscripciones as $inscripcion)
            <tr>
                <td class="text-center">{{$inscripcion->antecedente->alumna->nombre}}</td>
                <td class="text-center">{{substr($inscripcion->grupo->hora,0,5)}}</td>
                <td class="text-center"><a href="{{ route('editardatospersonales',$inscripcion->antecedente->alumna->id) }}" class="btn btn-primary">Editar datos</a></td>
                <td class="text-center">
                    <form action="{{route('inscripciones.destroy',$inscripcion->id)}}" method="post" id="frm-eliminar-inscripcion{{$inscripcion->id}}">
                        @csrf
                        {{method_field('delete')}}
                        <input class="btn btn-danger" type="button" value="Borrar" onclick="eliminarInscripcion({{ $inscripcion->id }})">
                    </form>
                </td>
                <td class="text-center">
                    <form action="{{route('borraralumna',$inscripcion->antecedente->alumna->id)}}" method="post" id="frm-eliminar-alumna{{ $inscripcion->antecedente->alumna->id  }}">
                        @csrf
                        {{method_field('delete')}}
                        <input class="btn btn-danger" type="button" value="Borrar" onclick="eliminarAlumna({{ $inscripcion->antecedente->alumna->id }})">
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
    <script>
        function eliminarAlumna(id) {
            swal('Eliminar','¿Realmente desea eliminar esta alumna?','warning');
            swal({
                title: "¿Eliminar?",
                text: "¿Seguro que desea eliminar esta alumna? \nSe eliminarán todos sus datos!",
                icon: "warning",
                buttons: ['Cancelar','Sí, eliminar'],
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        document.getElementById('frm-eliminar-alumna'+id.toString()).submit();
                    }
                });
        }
        function eliminarInscripcion(id) {
            swal('Eliminar','¿Realmente desea eliminar La inscripción de ésta alumna?','warning');
            swal({
                title: "¿Eliminar?",
                text: "¿Seguro que desea eliminar esta inscripción? \nse eliminarán los antecedentes de ésta alumna también!",
                icon: "warning",
                buttons: ['Cancelar','Sí, eliminar'],
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        document.getElementById('frm-eliminar-inscripcion'+id.toString()).submit();
                    }
                });
        }
    </script>
@endsection
@endsection
