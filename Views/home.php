<?php headerAdmin($data); ?>
	<div class="Contenido" id="Contenido3">
		<?php
		require_once 'apiCurso.php';
		$api = new apiCursos();
		$api->getAll();
		?>
		
		<h1> Cursos Mas Recientes </h1>
		<div class="Vacio"></div>
		
		<?php 
		if(!empty($_SESSION['cursos'])){
			for($i=0, $size = count($_SESSION['cursos']); $i < $size; $i++){
		?>
			<div class="card" style="width: 18rem;">
				<img src="no-image.png" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title"><?php echo $_SESSION['cursos'][$i]->getNombre_C() ?></h5>
				<p class="card-text"><?php echo $_SESSION['cursos'][$i]->getDescripcion_C() ?><br> <a href="Ver Categoria.html">Categoria</a> 
				<br>
						<a href="Perfil.html"><?php echo $_SESSION['cursos'][$i]->getFK_ID_Creador() ?></a>
				</p>
				<a href="Pagina Curso Comprar.html" class="btn btn-outline-success my-2 my-sm-0">Ver Mas</a>
				</div>
			</div>
		<?php 
			}
		} else{ ?>
			<h5 class="card-title">No hay cursos disponibles</h5>

		<?php } ?>
	</div>
<?php footerAdmin($data); ?>
