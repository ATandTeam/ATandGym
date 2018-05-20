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
                <td class="text-center"><a href="#" class="btn btn-primary">Datos</a></td>
                <td class="text-center"><a href="#" class="btn btn-primary">Editar alumna</a></td>
                <td class="text-center">
                    <form action="{{route('borraralumna',$inscripcion->antecedente->alumna->id)}}" method="post" id="frm-eliminar{{$inscripcion->antecedente->alumna->id}}">
                        @csrf
                        {{method_field('delete')}}
                        <input class="btn btn-danger" type="button" value="Borrar" onclick="eliminar({{ $inscripcion->antecedente->alumna->id }})">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@section('js')
    <script>
        function eliminar(id) {
            swal('Eliminar','¿Realmente desea eliminar esta alumna?','warning');
            swal({
                title: "¿Eliminar?",
                text: "¿Seguro que desea eliminar esta alumna? Se eliminarán todos sus datos!",
                icon: "warning",
                buttons: ['Cancelar','Sí, eliminar'],
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        document.getElementById('frm-eliminar'+id.toString()).submit();
                    }
                });
        }
    </script>
@endsection
@endsection
