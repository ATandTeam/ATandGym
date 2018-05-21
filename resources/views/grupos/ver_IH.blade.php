@extends('templates.base')
@section('titulo','Ver Grupos')
@section('contenido')
    <h1>Grupos</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary pl-3 pr-3" href="{{route('grupos.create')}}">Crear</a>
    </div>
    <div class="row mt-3">
        @foreach($grupos as $grupo)
            <div class="col-sm-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><strong>hora: </strong>{{ substr($grupo->hora,0,5) }}</h5>
                        <p class="card-text"><strong>cupo: </strong> {{ $grupo->cupo }}</p>

                        <form action="{{route('grupos.destroy',$grupo->id)}}" method="post" id="frm-eliminar{{$grupo->id}}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            {{-- <input class="btn btn-danger" value="Eliminar" type="submit"> --}}
                            <input class="btn btn-danger" type="button" value="Borrar" onclick="eliminar({{ $grupo->id }})">
                            <a href="{{route('grupos.edit',$grupo->id)}}" class="btn btn-primary">Editar</a>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-secondary" href="{{ route('home') }}">Regresar</a>
    </div>
    @section('js')
        <script>
            function eliminar(id) {
                swal('Eliminar','¿Realmente desea eliminar este grupo?','warning');
                swal({
                    title: "¿Eliminar?",
                    text: "¿Seguro que desea eliminar este grupo? ¡Se eliminarán todas las inscripciones de este grupo!",
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