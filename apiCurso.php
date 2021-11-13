<?php
include_once 'clases.php';
include_once 'Libraries/Core/querys.php';

class apiCursos{
	public $cursos;
		function getAll(){
			$query = new homeModel();
			$cursos = array();

			$res = $query->ObtenerCursos();

			if($res->rowcount()){
				while($row = $res->fetch(PDO::FETCH_ASSOC)){
					$item = new Curso(
						$row['ID_Curso'],
						$row['Nombre_C'],
						$row['Precio_C'],
						$row['Descripcion_C'],
						$row['niveles'],
						$row['calificacion_Curso'],
						$row['Imagen_C'],
						$row['Update_C'],
						$row['FechaC_C'],
						$row['Is_eliminado_C'],
						$row['FK_ID_Creador']
					);

					array_push($cursos, $item);
				}
				
					$_SESSION['cursos'] = $cursos;
				
				
			}
			else{
				
			}
		}
}

?>