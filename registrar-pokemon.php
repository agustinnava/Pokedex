<?php
session_start();
if (!$_SESSION['logeado']) {
    header('location:index.php');
    exit();
}
//Me conecto a la base
require_once ("conexion.php");
require_once ("funciones.php");

$db = new Conexion();

//Ruta donde se guardan las imagenes
$directory = "imagenes/";

//Recibo datos del form
$nombre = $_POST['nombre'];
$imagen = $_FILES['imagen']['name'];
$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];

$guardado = $_FILES['imagen']['tmp_name'];

//Guardo imagen en la base de datos
if (move_uploaded_file($guardado, $directory.$imagen)) {
    $db->execute("INSERT into imagen (imagen) VALUES ('$imagen')");
}

$imagenId = funciones::buscarImagenId($imagen);

//variables para poder evaluar si la query se ejecuto exitosamente
$sql = "INSERT into pokemon (nombre, imagen, tipo, descripcion) VALUES ('$nombre','$imagenId','$tipo','$descripcion')";

if ($db->execute($sql)){
    header("location:indexAdmin.php");
    exit();
} else {
    echo "No se pudo registrar el pokemon";
}

?>
