<header class="clearfix">
    <div class="container">
		<div class="header-left">
			<h1><a href="{{ route('welcome') }}" style="text-decoration: none;">Zona fitness</a></h1>
		</div>
		<div class="header-right">
			<label for="open">
				<span class="hidden-desktop"></span>
			</label>
			<input type="checkbox" name="" id="open">
			<nav>
				<a href="#">Inspírate</a>
				<a href="#">Galería</a>
				<a href="#">Contactation</a>
				@if (!Auth::check())
					<a class="launch-modal" href="#" data-modal-id="modal-login">Entrar</a>
					@else
					<a href="{{ route('logout') }}"
					       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					       Salir
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					    @csrf
					</form>
				@endif
			</nav>
		</div>
	</div>
</header>
@if (!Auth::check())
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
	<div class="modal-dialog" id="frm-register">
		<div class="modal-content">
			
				<button type="button" class="close btn btn-dark" data-dismiss="modal">Cerrar
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
			<div class="modal-header">
				<h3>Zona Fitness | Iniciar Sesión</h3>
			</div>
			
			<div class="modal-body">
				
                <form role="form" action="{{ route('login') }}" method="POST" class="login-form">
                	@csrf
                	<div class="form-group">
                		<label class="sr-only" for="form-username">Usuario</label>
                    	<input type="text" name="username" placeholder="Usuario" class="form-username form-control" style="color: white;" id="form-username">
                    </div>
                    <div class="form-group">
                    	<label class="sr-only" for="form-password">Contraseña</label>
                    	<input type="password" name="password" placeholder="Contraseña" class="form-password form-control" id="form-password" style="color: white;" value="{{ old('email') }}" required autofocus>
                    	<a style="color: #717171; margin-top: 10px; display: inline-block; margin-left: 10px;" href="#">Olvidé mi contraseña</a>
                    </div>
                    <div class="form-group row">
                    	<button type="submit" class="btn mt-3">Entrar</button>
                    	<div class="mt-3 col-12">
                    		<div class="bg-white" style="height: 2px;"></div>
                    		<br>
                    		<h4 class="text-white mt-4">¿No tienes cuenta?</h4>
                    		<a class="btn btn-primary col-12" href="{{ route('register') }}">Regístrate</a>
                    	</div>
                    </div>
                </form>
                
			</div>
			
		</div>
	</div>
</div>
@endif