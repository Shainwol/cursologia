<?php headerAdmin($data); ?>


    <br>
		<div class="Contenido" id="Contenido2">
            <div class="Signin">
                <form id="formRegistro" name="formRegistro">
                    <div class="row">
                        <div id="Imagenes" class="col-5">
                            <br> <br>
                            <img src="Assets/images/Perfil.png" class="rounded mx-auto d-block" alt="Foto de Perfil" name="FotoRegistro" id="FotoRegistro" >
                            <br>
                            <input type="file" name="txtImagen" id="txtImagen" class="inputUploadfile" accept="image/*">
            				<label for="txtImagen" id="btnUploadfile" class="btn btn-outline-success my-2 my-sm-0">Cargar Imagen</label>
            				<!----Si no esta iniciada la sesion
            				<button style="" class="btnDeleteImage notblock" type="button" onclick="borrarImagen()">Eliminar</button>
            				----->
                            <br> <br>
                            <label for="FechaNac">Fecha de nacimiento:</label>
                            <input type="date" id="txtFecha" name="txtFecha" value="2021-06-06" min="2018-01-01" max="2021-06-06">
                        </div>
                        <div class="col-2" > </div>
                        <div class="col-4" >
                            <label for="txtNombres">Nombres:</label>
                            <input id="txtNombres" name="txtNombres" type="text" class="form-control" style ="width: 200px; height: 35px; padding-top: 3px; padding-bottom: 3px;" required="" minlength="1" maxlength="50" style="background-color: white;">
                            <label for="txtApellidos">Apellidos:</label>
                            <input id="txtApellidos" name="txtApellidos" type="text" class="form-control" style ="width: 200px; height: 35px; padding-top: 3px; padding-bottom: 3px;" required="" minlength="1" maxlength="50" style="background-color: white;">
                            <label for="txtCorreo">Email:</label>
                            <input id="txtCorreo" name="txtCorreo" type="text" class="form-control" style ="width: 200px; height: 35px; padding-top: 3px; padding-bottom: 3px;" required="" minlength="1" maxlength="50" style="background-color: white;">
                            <label for="txtContraseña">Contraseña:</label>
                            <input id="txtContraseña" name="txtContraseña" name="clave" type="password" class="form-control" style ="width: 200px; height: 35px; padding-top: 3px; padding-bottom: 3px;" required="" minlength="1" maxlength="50" style="background-color: white;" >
                            <label id="txtGenero" for="Genero">Genero:</label>
                            <select id="txtGenero" name="txtGenero" class="form-select" style ="width: 200px; height: 35px; padding-top: 3px; padding-bottom: 3px;"  name="Genero" id="Categoria" class="Combo">
			                    <option value="1">Masculino</option>
			                    <option value="2">Femenino</option>
			                    <option value="3">Otro</option>
			                </select>
                            <label for="txtTipoUsuario">Tipo Usuario:</label>
                            <select id="txtTipoUsuario" name="txtTipoUsuario" class="form-select" style ="width: 200px; height: 35px; padding-top: 3px; padding-bottom: 3px;" name="Usuario" id="Categoria" class="Combo">
			                    <option value="1">Estudiante</option>
			                    <option value="2">Maestro</option>
			                </select> 
                        </div>
                    </div>
                    <br>
                    <label hidden id="texto">Errores en la contraseña:</label> <br>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btnRegistrar">Registrarse</button>
                    <br>
                    <label>Ya tienes cuenta? <a href="<?= base_url(); ?>login"> Iniciar Sesion </a></label>
                </form>
            </div>
        </div>

<? php footerAdmin($data); ?>