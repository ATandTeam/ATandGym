@extends('templates.base')
@section('titulo','Inicio')
@section('contenido')
<div class= id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Zona Fitness | Registro</h3>
            </div>
            <div class="modal-body">
                <form role="form" action="" method="post" class="login-form">
                    <div class="form-group">
                        <label class="sr-only" for="form-email">Email</label>
                        <input type="text" name="email" placeholder="Email" class="form-control" style="color: white;" id="form-email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-username">Usuario</label>
                        <input type="text" name="usuario" placeholder="Usuario" class="form-username form-control" style="color: white;" id="form-username">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="pass">Contraseña</label>
                        <input type="password" name="pass" placeholder="Contraseña" class="form-password form-control" id="pass" style="color: white;">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="pass2">Contraseña</label>
                        <input type="password" name="pass2" placeholder="Contraseña" class="pass2 form-control" id="pass2" style="color: white;">
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn mt-3">Registrarme</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection