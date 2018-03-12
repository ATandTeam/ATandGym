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
				<a href="#">Contacto</a>
				<a class="launch-modal" href="#" data-modal-id="modal-login">Entrar</a>
			</nav>
		</div>
	</div>
</header>

<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
				<button type="button" class="close btn btn-dark" data-dismiss="modal">Cerrar
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
			<div class="modal-header">
				<h3>Zona Fitness | Iniciar Sesión</h3>
			</div>
			
			<div class="modal-body">
				
                <form role="form" action="" method="post" class="login-form">
                	<div class="form-group">
                		<label class="sr-only" for="form-username">Usuario</label>
                    	<input type="text" name="usuario" placeholder="Usuario" class="form-username form-control" style="color: white;" id="form-username">
                    </div>
                    <div class="form-group">
                    	<label class="sr-only" for="form-password">Contraseña</label>
                    	<input type="password" name="pass" placeholder="Contraseña" class="form-password form-control" id="form-password" style="color: white;">
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