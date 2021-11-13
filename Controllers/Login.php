<?php 
	class Login extends Controllers{
		public function __construct()
		{
			session_start();
			session_regenerate_id(true);
			if(isset($_SESSION['login']))
			{
				header('Location: '.base_url());
				die();
			}
			parent::__construct();
		}

		public function login()
		{
			$data['page_tag'] = "Login";
			$data['page_title'] = "Iniciar Sesion";
			$data['page_name'] = "login";
			$data['page_functions_js'] = "functions_login.js";
			$this->views->getView($this,"login",$data);
		}

		public function loginUser(){
			if($_POST){
				if(empty($_POST['txtCorreo']) || empty($_POST['txtContraseña'])){
					$arrResponse = array('status' => false, 'msg' => 'Error de datos' );
				}else{
					$strCorreo  =  strtolower(strClean($_POST['txtCorreo']));
					$strContraseña = $_POST['txtContraseña'];
					$requestUser = $this->model->loginUser($strCorreo, $strContraseña);
					if(empty($requestUser)){
						$arrResponse = array('status' => false, 'msg' => 'El correo o la contraseña es incorrecto.' ); 
					}else{
						$arrData = $requestUser;
						if($arrData['Is_eliminado_U'] == 0){
							$_SESSION['ID_User'] = $arrData['ID_User'];
							$_SESSION['login'] = true;
							$_SESSION['arrUsuario'] = $arrData;
							//sessionUser($_SESSION['ID_User']);							
							$arrResponse = array('status' => true, 'msg' => 'ok');
						}else{
							$arrResponse = array('status' => false, 'msg' => 'Usuario inactivo.');
						}
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}

 ?>