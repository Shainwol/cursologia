<?php 

Class Querys extends DB{

	private $strquery;
	private $arrValues;

public function select_all(string $query)
		{
			$this->strquery = $query;
        	$result = $this->connect()->prepare($this->strquery);
			$result->execute();
        	$data = $result->fetchall(PDO::FETCH_ASSOC);
        	return $data;
		}

	function ObtenerCursos(){
		$query = $this->connect()->query('SELECT * FROM Curso');

		return $query;
	}
	
	public function insert(string $query, array $arrValues)
		{
			$this->strquery = $query;
			$this->arrVAlues = $arrValues;
        	$insert = $this->connect()->prepare($this->strquery);
        	$resInsert = $insert->execute($this->arrVAlues);
        	if($resInsert)
	        {
	        	$lastInsert = 1;
	        }else{
	        	$lastInsert = 0;
	        }
	        return $lastInsert; 
		}

	public function select(string $query)
		{
			$this->strquery = $query;
        	$result = $this->connect()->prepare($this->strquery);
			$result->execute();
        	$data = $result->fetch(PDO::FETCH_ASSOC);
        	return $data;
		}
}

?>