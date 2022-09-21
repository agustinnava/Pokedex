<?php
require_once 'conexion.php';

$numero = $_GET['numero'];

$imagen = $_POST['imagen'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];
$actualizar = $_POST['actualizar'];

$db = new Conexion();

if(isset($actualizar)){
    $qrySelect = "SELECT * FROM pokemon WHERE numero =" . $numero;

    $resultSelect = $db->query($qrySelect);

    foreach ($resultSelect as $result){

        $qry = "UPDATE imagen SET imagen = " . $imagen .  " WHERE id = " . $result['imagen'];
        $db->execute($qry);

        $qry2 = "UPDATE tipo SET tipo = " . $tipo .  " WHERE id = " . $result['tipo'];
        $db->execute($qry2);

        $qry3 = "UPDATE pokemon SET descripcion = " . $descripcion .  " WHERE numero = " . $numero;
        $db->execute($qry3);

        $qry4 = "UPDATE pokemon SET nombre = " . $nombre .  " WHERE numero = " . $numero;
        $db->execute($qry4);
    }
    header('location:modificar.php?numero=' . $numero);
}


?>