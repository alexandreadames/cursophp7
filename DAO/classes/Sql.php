<?php 


class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:dbname=cursophp7;host=localhost","root","");


	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	private function setParam($stament, $key, $value){

		$stament->bindParam($key, $value);

	}

	private function setParams($stament, $parameters=array()){

		foreach ($parameters as $key => $value) {
			
			$stament->bindParam($key, $value);

		}


	}

	public function select($rawQuery, $params=array()):array{
		
		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}

 ?>