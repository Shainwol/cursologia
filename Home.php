<?php 

	class Home extends Controllers{
		public function __construct()
		{	
			session_start();
			session_regenerate_id(true);
			parent::__construct();
		}

		public function home()
		{
			$data['page_id'] = 1;
			$data['page_tag'] = "Home";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "home";
			$data['page_functions_js'] = "functions_home.js";
			$this->views->getView($this,"home",$data);
		}

		public function vercursos(){
			$data = $this->model->getAllCursos();
			print_r($data);
		}

	}
 ?>