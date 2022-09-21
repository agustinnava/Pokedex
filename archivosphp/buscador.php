<?php
require_once 'conexion.php';

$buscador = $_POST['search'];
$aBuscar = $_POST['buscador'];



class Buscador{

    private $db;

    public function __construct () {
        $db = new Conexion();
    }

    public static function listarResultadosFiltrados($buscador){

        $db = new Conexion();

        $qry = "SELECT p.nombre, p.descripcion, t.tipo, i.imagen FROM pokemon p LEFT JOIN imagen i ON p.imagen = i.id 
    LEFT JOIN tipo t ON p.tipo = t.id WHERE p.numero LIKE '%" . $buscador .  "%' OR t.tipo LIKE '%" . $buscador .  "%' 
    OR p.nombre LIKE '%" . $buscador .  "%'";

        return $resultados = $db->query($qry);

/*
        if(isset($aBuscar)) {
            foreach ($resultados as $resultado){

                echo 'NOMBRE: ' . $resultado['nombre'];
                echo 'descripcion: ' . $resultado['descripcion'];
                echo 'tipo: ' . $resultado['tipo'];
                echo 'imagen: ' . $resultado['imagen'];



                        if ($resultado['user'] == $usuario && $resultado['password'] == $password) {
                            session_start();
                            $_SESSION['logeado'] = true;
                            header('location:../indexAdmin.php');
                            exit();
                        } else {
                            $_SESSION['logeado'] = false;
                            session_destroy();
                            header('location:../index.php');
                            exit();
                        }
            }

        }*/
}

}




?>