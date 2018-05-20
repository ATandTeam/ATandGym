
@extends('templates.base')
@section('titulo','Inicio')
@section('contenido')
    <div class="d-flex justify-content-center">
        <div class="col">
            <h1>Bienvenida {{Auth::user()->username}}</h1>
            <div class="row m-3">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body ">
                        @if($rol == null)
                            <h5 class="card-title">Inscríbete a un grupo</h5>
                            <p class="card-text">Ahora solo falta que te inscribas a un grupo, una vez te acepte la administradora, podrás ver detaalles de tu grupo aquí.</p>
                            <a href="{{route('inscripciones.index')}}" class="btn btn-primary">Inscribirme</a>
                        @elseif($rol != 'admin')
                            <h5 class="card-title">Preinscripción en progreso</h5>
                            <p class="card-text">Genial!, Ahora solo falta que te apruebe la administradora, Sé paciente por favor.</p>
                        @else
                                <h5 class="card-title">Solicitudes de inscripcion</h5>
                                <p class="card-text">Puedes ver las solicitudes de personas que están interesadas a asistir al gimnasio.</p>
                                <a href="{{route('confirmarInscripciones')}}" class="btn btn-primary">Ver solicitudes</a>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            @if($rol == 'admin')
                                <h5 class="card-title">Ver alumnas</h5>
                                <p class="card-text">Consulta y gestiona la información de las alumnas inscritas al gimnasio.</p>
                                <a href="{{route('veralumnasinscritas')}}" class="btn btn-primary">Ver alumnas</a>
                            @else
                                <h5 class="card-title">Datos personales</h5>
                                <p class="card-text">Consulta y gestiona tus datos personales.</p>
                                <a href="#" class="btn btn-primary">Ver datos personales</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if($rol == 'admin')
            <div class="row m-3">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                                <h5 class="card-title">Grupos</h5>
                                <p class="card-text">Administra los grupos existentes o crea nuevos.</p>
                                <a href="{{route('grupos.index')}}" class="btn btn-primary">Ver grupos</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection