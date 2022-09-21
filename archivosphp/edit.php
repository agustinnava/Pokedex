<?php
require_once 'conexion.php';


$db = new Conexion();



$numero = $_GET['numero'];
$action = $_GET['action'];


?numero=$fila[0]&action=delete

if($_SESSION['logeado'] == true){
	if($action == 'delete'){
		//EJECUTAR QUERY DELETE
		$qry = "DELETE FROM pokemon WHERE numero =" . numero;
		$resultado = $db->execute(qry);
		if($resultado){
			header('location:indexAdmin.php');
			exit();
		}

	}
	if($action == 'modificar'){
		//redirigir a un html para hacer los updates correspondientes
		header('location:modificar.php?numero=' . numero);
	}
}else{
	header('location:indexAdmin.php');
}


?>