
@extends('templates.base')
@section('titulo','Inicio')
@section('contenido')
    @if(Auth::user()->id != 0)
        <div class="d-flex justify-content-center">
            <div class="col">
                <div class="row m-3">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Inscripción en progreso</h5>
                                <p class="card-text">Listo, te has inscrito a un grupo vez te acepte la administradora, podrás ver detaalles de tu grupo aquí.</p>
                                <a href="{{route('inscripciones.index')}}" class="btn btn-primary">Inscribirme</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{Auth::user()->username}}</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <h1>ADMIN</h1>
    @endif
@endsection