<?php 

	class registroModel extends Querys
	{
		private $strNombres;
		private	$strApellidos;
		private $strCorreo;
		private $strContraseña; 
		private $strGenero;
		private $strTipoUsuario;
		private $binaryImagen = ''; 
		private $strFecha;
		private $strTipoImagen;

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertUsuario(string $strNombres, 
									string $strApellidos,
									string $strCorreo, 
									string $strContraseña, 
									int $strGenero,
									int $strTipoUsuario, 
									int $strFecha,
									$binaryImagen,
									string $strTipoImagen)
		{
		$this->strNombres = $strNombres ;
		$this->strApellidos = $strApellidos;
		$this->strCorreo = $strCorreo;
		$this->strContraseña = $strContraseña; 
		$this->strGenero = $strGenero;
		$this->strTipoUsuario = $strTipoUsuario;
		$this->binaryImagen = $binaryImagen; 
		$this->strFecha = $strFecha;
		$this->strTipoImagen = $strTipoImagen;
		$return = 0;

		$sql = "call BuscarUsuario('{$this->strCorreo}')";
		$request = $this->select_all($sql);

		if(empty($request))
			{
				$query_insert  = "call AgregarUsuario(?,?,?,?,?,?,?,?) ";
	        	$arrData = array($this->strNombres." ".$this->strApellidos,
        						$this->strCorreo,
        						$this->strTipoUsuario,
        						$this->strGenero,
        						$this->strContraseña,
        						$this->binaryImagen,
								$this->strFecha,
								$this->strTipoImagen
        					);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = 0;
			}
	        return $return;
		}
	}
 ?>