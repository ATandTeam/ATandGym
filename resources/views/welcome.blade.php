@extends('templates.base')
@section('titulo','Inicio')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/form-elements.css') }}">
	@endsection
@section('contenido')
	<div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel"
>		<ol class="carousel-indicators">
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
	@if (!Auth::check() && $errors->count() > 0)
		@section('js')
			<script>
				swal ( "Error" ,  "No pudimos encontrar un usuario con los datos introducidos. Inténtalo de nuevo " ,  "error" )
			</script>
		@endsection
	@endif
@endsection