<?php
session_start();
if (!$_SESSION['logeado']) {
    header('location:index.php');
    exit();
}

require_once 'conexion.php';

$numero = $_GET['numero'];

$db = new Conexion();

//mirar bien como borrar la imagen a traves de la foreing key y borrar la imagen subida al server
/* Que la imagen se borre de la base de datos y del directorio */
$qry1 = "DELETE FROM pokemon WHERE numero = '$numero'";
$qry2 = "DELETE FROM imagen WHERE id = '$numero'";

$db->execute($qry1);
$db->execute($qry2);

header('location:indexAdmin.php');

?>

