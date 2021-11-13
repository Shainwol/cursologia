<?php headerAdmin($data); ?>
	<div class="Contenido" id="Contenido1">
    	<div class="Login">
        	<form id="formLogin" name="formLogin">
            	<label for="Email">Email: </label>
            	<input id="txtCorreo" name="txtCorreo" type="text" required="" minlength="1" maxlength="50" class="form-control" style ="padding-top: 3px; padding-bottom: 3px;" required="" minlength="1" maxlength="50" style="background-color: white;"> 
                <div class="Vacio"></div>
            	<label for="Contraseña">Contraseña: </label>
                <input id="txtContraseña" name="txtContraseña" type="password" required="" minlength="1" maxlength="50" class="form-control" style ="padding-top: 3px; padding-bottom: 3px;" required="" minlength="1" maxlength="50" style="background-color: white;"> <br>
                
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" action="Index.html">Iniciar Sesion</button>
				<br>
                <label>Aun no tienes cuenta? <a href="<?= base_url(); ?>registro"> Registrate </a></label>     
            </form>
        </div>
    </div>

<script src="<?= media(); ?>js/functions_login.js"></script>

<?php footerAdmin($data); ?>