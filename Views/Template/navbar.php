<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>
	<div class="navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url(); ?>">Inicio</a>
			</li>
			<!----Si no esta iniciada la sesion----->
			<?php if(empty($_SESSION['login'])){ ?>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Invitado </a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="<?= base_url(); ?>login">Iniciar Sesion</a>
				<a class="dropdown-item" href="<?= base_url(); ?>registro">Crear Cuenta</a>
			</div>
			</li>
			<?php } 
			else { if($_SESSION['arrUsuario']['tipo_usuario'] == 'Maestro'){?>
			<!----Si esta iniciada la sesion Maestro----->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Maestro </a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="<?= base_url(); ?>miPerfil">Perfil</a>
				<a class="dropdown-item" href="Crear Curso.html">Crear Curso</a>
				<a class="dropdown-item" href="Mis Cursos Maestro.html">Mis Cursos</a>
				<a class="dropdown-item" href="Mensajes.html">Ver Mensajes</a>
			<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?= base_url(); ?>Logout">Cerrar Sesion</a>
			</div>
			</li>

			<?php }else{  ?>
			<!----Si esta iniciada la sesion Alumno----->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Alumno </a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="<?= base_url(); ?>miPerfil">Perfil</a>
				<a class="dropdown-item" href="Mis Cursos Alumno.html">Mis Cursos</a>
				<a class="dropdown-item" href="Mensajes.html">Ver Mensajes</a>
			<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?= base_url(); ?>Logout">Cerrar Sesion</a>
			</div>
			</li>

			<?php } }?>		
		</ul>
		<form class="d-flex" action="Busqueda.html">
			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        	<button class="btn btn-outline-success" type="submit">Search</button>
		</form>
	</div>
	</div>
</nav>