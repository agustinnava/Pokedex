<?php
session_start();
if (!$_SESSION['logeado']) {
    header('location:index.php');
    exit();
}
require_once 'conexion.php';

$numero = $_POST['numero'];
$imagen = $_FILES['imagen']['name'];
$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];
$nombre = $_POST['nombre'];

$db = new Conexion();

$qry= "SELECT * FROM pokemon WHERE numero = '$numero'";

$resultSelect = $db->query($qry);

foreach ($resultSelect as $result) {

    //revisar que se pueda modificar la imagen
    if($imagen != null){
        move_uploaded_file($_FILES['imagen']['tmp_name'], "imagenes/".$imagen);
        $qry = "UPDATE pokemon SET imagen = '$imagen' WHERE numero = '$numero'";
        $db->execute($qry);
    }

    if($tipo != null){
        $qry2 = "UPDATE pokemon SET tipo = '$tipo' WHERE numero = '$numero'";
        $db->execute($qry2);
    }

    if($descripcion != null) {
        $qry3 = "UPDATE pokemon SET descripcion = '$descripcion' WHERE numero = '$numero'";
        $db->execute($qry3);
    }

    if($nombre != null){
        $qry4 = "UPDATE pokemon SET nombre = '$nombre' WHERE numero = '$numero'";
        $db->execute($qry4);
    }

    header("location: indexAdmin.php");
}


?>