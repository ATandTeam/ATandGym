<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/form-elements.css') }}">
	@yield('css')
	<title>@yield('titulo', 'AT&Team')</title>
</head>
<body>
	@include('templates.navbar')
	<div id="main" class="container">
		<br>
		@yield('contenido')
	</div>
	<script src={{ asset('js/jquery-3.2.1.min.js') }}></script>
	<script src={{ asset('js/popper.min.js') }}></script>
	<script src={{ asset('js/bootstrap.min.js') }}></script>
	<script src={{ asset('js/toastr.js') }}></script>
	<script src={{ asset('js/vue.js') }}></script>
	<script src={{ asset('js/axios.js') }}></script>
	<script src={{ asset('js/jquery.backstretch.min.js') }}></script>
	<script src={{ asset('js/scripts.js') }}></script>
	<script src={{ asset('js/sweetalert.min.js') }}></script>
	<script src="{{asset('js/app.js')}}"></script>

	@yield('js')
	@include('templates.footer')
</body>
</html>