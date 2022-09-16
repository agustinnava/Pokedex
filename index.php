<?php
require_once('conexion.php');

$db = new Conexion();

$qry = "SELECT * FROM pokemon";

$resultados = $db->execute($qry);

//echo implode(",", $resultados);
/*while($resultados->fetch_assoc()){
    echo $resultados['numero'];
}*/

if($resultados && $resultados->num_rows>0){
    $resultados->fetch_all(MYSQLI_ASSOC);
}

foreach ($resultados as $resultado){
    echo $resultado['numero'];
    //echo 'Numero:' . $resultado['numero'] . ', imagen:' . $resultado['imagen'] . ', tipo: ' . $resultado['tipo'] . ', nombre: ' . $resultado['nombre'] . ', descripcion: ' . $resultado['descripcion'];
}

?>


<html>



<h1>PRUEBA</h1>



</html>