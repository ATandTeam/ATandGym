<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<title>@yield('titulo', 'AT&Team')</title>
</head>
<body style="background-color: rgb(30,30,30);">
	@include('templates.navbar')
	<div id="main" class="container">
		@yield('contenido')
	</div>
	@include('templates.footer')
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/myJs.js') }}"></script>
</body>
</html>