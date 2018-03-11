<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<title>Laravel</title>
</head>
<body>
	<div class="menu">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Fitness</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Nosotros</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Galería
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Rutinas</a>
							<a class="dropdown-item" href="#">Equipo</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Más</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container mt-3">
		<div id="carouselExampleIndicators" class="carousel slide w-75" data-ride="carousel" style="margin-left: 12.5%;">
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
		<br>
		<article>
			<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis voluptatibus voluptate ut minus praesentium accusantium possimus explicabo, repellat repellendus natus.
			</p>
		</article>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>