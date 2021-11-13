<?php headerAdmin($data); ?>
	<div class="Contenido" id="Contenido1">
        <div class="Perfil">
            <?php if($_SESSION['arrUsuario']['Imagen_U'] == "") {?>
            <img src="Assets/images/Perfil.png" class="rounded mx-auto d-block" alt="Foto de Perfil" id="FotoRegistro">
            <?php } else {?>
            <img src="data:<?php echo $_SESSION['arrUsuario']['tipo_usuario'] ?>;base64,<?php echo base64_encode($_SESSION['arrUsuario']['Imagen_U'])?>" class="rounded mx-auto d-block" alt="Foto de Perfil" id="FotoRegistro">    
            <?php }?>
            <br> <br>
            <div class="row" style="width: 800px; align-items: center; vertical-align: middle;">
                <div class="col-10">
                    Nombre: <?php echo $_SESSION['arrUsuario']['Nombre_U'] ?> <br>
                    Fecha de Nacimiento: <?php echo $_SESSION['arrUsuario']['FechaNac_U'] ?> Genero: <?php 
                    if($_SESSION['arrUsuario']['gender'] == "m"){
                        echo 'Masculino';
                    } else {
                        if($_SESSION['arrUsuario']['gender'] == "f"){
                        echo 'Femenino';
                        } else {
                            if($_SESSION['arrUsuario']['gender'] == "o"){
                            echo 'Otro';
                            }
                        }
                    }
                    ?>
                </div>
                <div class="col-2">
                    <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href ="Editar Perfil.html">Editar Perfil</a>
                </div>
            </div>
        </div>
    </div>
<?php footerAdmin($data); ?>