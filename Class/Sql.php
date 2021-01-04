<?php

class Sql extends PDO{
	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
	}

	private function setParams($statment, $parameters = array()){

		foreach ($parameters as $chave => $valor) {
			$this->setParam($chave, $valor);
		}
	}

	private function setParam($statment, $chave, $valor){

		$statment->bindParam($chave, $valor);
	}

	public function query($consultaBruta, $parametros = array()){

		$stmt = $this->conn->prepare("$consultaBruta"); 
		
		$this->setParams($stmt, $parametros);

		$stmt->execute();

		return $stmt;

	}

	public function select($consultaBruta, $parametros = array()):array{

		$stmt = $this->query($consultaBruta, $parametros);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	
	}
?>