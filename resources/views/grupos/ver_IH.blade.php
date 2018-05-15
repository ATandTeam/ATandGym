@extends('templates.base')
@section('titulo','Ver Grupos')
@section('contenido')
    <h1>Grupos</h1>
    <a class="btn btn-primary" href="{{route('grupos.create')}}">Crear</a>
    <div class="row mt-3">
        @foreach($grupos as $grupo)
            <div class="col-sm-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><strong>hora: </strong>{{ substr($grupo->hora,0,5) }}</h5>
                        <p class="card-text"><strong>cupo: </strong> {{ $grupo->cupo }}</p>
                        <p class="card-text"><strong>turno: </strong> {{ $grupo->turno }}</p>

                        <form action="{{route('grupos.destroy',$grupo->id)}}" method="post" id="frm-eliminar{{$grupo->id}}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            {{-- <input class="btn btn-danger" value="Eliminar" type="submit"> --}}
                            <input class="btn btn-danger" type="button" value="Eliminar" onclick="eliminar({{ $grupo->id }})">
                            <a href="{{route('grupos.edit',$grupo->id)}}" class="btn btn-primary">Editar</a>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @section('js')
        <script>
            function eliminar(id) {
                swal('Eliminar','¿Realmente desea eliminar este grupo?','warning');
                swal({
                    title: "¿Eliminar?",
                    text: "¿Seguro que desea eliminar este grupo? ¡Se eliminarán todas las inscripciones de este grupo!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            document.getElementById('frm-eliminar'+id.toString()).submit();
                        } else {
                            swal("Cancelado!", {
                                icon: "success",
                            });
                        }
                    });
            }
        </script>
    @endsection
@endsection