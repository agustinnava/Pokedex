<?php

require_once 'conexion.php';

$numero = $_GET['numero'];

$db = new Conexion();

$qry = "DELETE FROM pokemon WHERE numero = " . $numero;
$db->execute($qry);

header('location:../indexAdmin.php');

?>