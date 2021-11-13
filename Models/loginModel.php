<?php 

	class LoginModel extends Querys
	{
		private $intIdUsuario;
		private $strCorreo;
		private $strContraseña;
		private $strToken;

		public function __construct()
		{
			parent::__construct();
		}	

		public function loginUser(string $usuario, string $password)
		{
			$this->strCorreo = $usuario;
			$this->strContraseña = $password;
			$sql = "call Login('$this->strCorreo', '$this->strContraseña')";
			$request = $this->select($sql);
			return $request;
		}

	}
 ?>