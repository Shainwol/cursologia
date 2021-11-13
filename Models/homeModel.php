<?php 

	class homeModel extends Querys
	{
		public function __construct()
		{
			parent::__construct();
		}	

		public function getAllCursos()
		{
			$sql = "SELECT * FROM Curso";
			$request = $this->select_all($sql);
			return $request;
		}	
	}
 ?>