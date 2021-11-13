<?php 
	class Registro extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Registro()
		{
			$data['page_tag'] = "Registro";
			$data['page_title'] = "Registrate";
			$data['page_name'] = "registro";
			$data['page_functions_js'] = "functions_registro.js";
			$this->views->getView($this,"registro",$data);
		}

		public function nuevoUsuario()
		{
			if($_POST){
				if(empty($_POST['txtNombres']) || empty($_POST['txtApellidos']) || empty($_POST['txtCorreo']) || empty($_POST['txtContraseña']) || empty($_POST['txtGenero']) || empty($_POST['txtTipoUsuario']) || empty($_POST['txtFecha']) ){
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{ 
					$strNombres =  ucwords(strClean($_POST['txtNombres']));
					$strApellidos = ucwords(strClean($_POST['txtApellidos']));
					$strCorreo = strtolower(strClean($_POST['txtCorreo']));
					$strContraseña = strClean($_POST['txtContraseña']);
					$strGenero = intval(strClean($_POST['txtGenero']));
					$strTipoUsuario = intval(strClean($_POST['txtTipoUsuario']));
					$strFecha = intval(strClean($_POST['txtFecha']));
					$tamaño = $_FILES['txtImagen']['size'];
					$strTipoImagen = $_FILES['txtImagen']['type'];
					$Archivo = $_FILES['txtImagen'];
					$imgNombre = 'pro_'.md5(date('d-m-Y H:m:s')).'.jpg';
					$binaryImagen = '';
					if(!empty($_FILES['txtImagen']['tmp_name']) ){
					$binaryImagen = fopen($_FILES['txtImagen']['tmp_name'], 'r');
					$binaryImagen = fread($binaryImagen, $tamaño);}
					$request_user = $this->model->insertUsuario($strNombres, 
																$strApellidos,
																$strCorreo, 
																$strContraseña, 
																$strGenero,
																$strTipoUsuario, 
																$strFecha,
																$binaryImagen,
																$strTipoImagen);
					if($request_user > 0 ) {
						uploadImage($Archivo, $imgNombre);
					$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');	
					}else if($request_user == 0){
						$arrResponse = array('status' => false, 'msg' => '¡Atención! el email ya existe, ingrese otro.');		
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}

 ?>