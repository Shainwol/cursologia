<?php 
	class Perfil extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

	public function Perfil()
		{
			$data['page_tag'] = "Perfil";
			$data['page_title'] = "Perfil";
			$data['page_name'] = "perfil";
			$data['page_functions_js'] = "functions_perfil.js";
			$this->views->getView($this,"perfil",$data);
		}
	}
?>