<?php
require_once('conexion.php');

class Crud{

	$db;

	 public function __construct () {
        this->db = new Conexion();
    }

	public static function listarResultados(){

		$db = new Conexion();

		$qry = "SELECT * FROM pokemon";

		$resultados = $db->execute($qry);


		if($resultados && $resultados->num_rows>0){
		    return $resultados->fetch_all(MYSQLI_ASSOC);
		}

	}
}





?>