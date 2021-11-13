<?php 

	class MiPerfil extends Controllers{
		public function __construct()
		{
			session_start();
			session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			parent::__construct();
		}

	public function MiPerfil()
		{
			$data['page_tag'] = "Perfil";
			$data['page_title'] = "Perfil";
			$data['page_name'] = "perfil";
			$data['page_functions_js'] = "functions_miPerfil.js";
			$this->views->getView($this,"miPerfil",$data);
		}
	}
?>