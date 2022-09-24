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
$imagenAsubir = '';

$db = new Conexion();

$qry= "SELECT * FROM pokemon WHERE numero = '$numero'";

$resultSelect = $db->query($qry);

foreach ($resultSelect as $result) {

    if($imagen != null){
        //SUBE IMAGEN AL DIRECTORIO
        move_uploaded_file($_FILES['imagen']['tmp_name'], "imagenes/".$imagen);
        //SUBE IMAGEN A LA BASE DE DATOS
        $qryInsertImagen = "INSERT INTO imagen (imagen) VALUES ('$imagen')";

        //SI SE PUDO SUBIR
        if($db->execute($qryInsertImagen)){
            //LLAMO AL ID DE ESA IMAGEN
            $qryTraerImagen= "SELECT id FROM imagen WHERE imagen = '$imagen'";
            $idImagen = $db->query($qryTraerImagen);

            //INGRESO ESE ID COMO NUEVA FK DE IMAGEN EN POKEMON
            foreach ($idImagen as $imagenAsubir){
                $qry = "UPDATE pokemon SET imagen = ' $imagenAsubir[id]' WHERE numero = '$numero'";
                $db->execute($qry);
            }
        }
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