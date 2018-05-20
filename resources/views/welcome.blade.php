
    @extends('templates.base')
    @section('titulo','Inicio')

    @section('contenido')
        <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="http://healthylnb.com/wp-content/uploads/2016/04/exercise-in-the-dark-min.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.healthreflect.com/webroot/img/articles/1517220531fitnessactivities_thumb.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://media-exp2.licdn.com/mpr/mpr/AAIAAwDGAAAAAQAAAAAAAA1iAAAAJDBlYTg5ZTkyLWZjYTYtNDNkYi05NjMwLTcwMDQwNTg0ZDkwOQ.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div  class="form-group row">
            @if(Auth::check())
                <a class="btn btn-success" href="{{route('datospersonales',Auth::user()->id)}}">Ver datos personales</a>
            @endif
        </div>
        @if($errors->count() > 0)
    @section('js')
        @php
            $errores = '';
        @endphp
        @foreach($errors->all() as $error)
            @php
                $errores.=$error.'\n';
            @endphp
        @endforeach
        <script>
            swal("Inicia sesión por favor",""+"{{$errores}}", "error");
        </script>
    @endsection
    @endif
    @endsection