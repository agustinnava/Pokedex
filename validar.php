<?php
require_once("conexion.php");

$usuario = $_POST['user'];
$password = $_POST['password'];

$enviar = $_POST['enviar'];
$_SESSION['logeado'] = false;

$db = new Conexion();

/* si hay tiempo, que permita loguear con cualquier usuario registrado, obtener un array con
todos los usuarios y realizar la comparacion */

$sql = "SELECT * FROM usuarios WHERE user = 'admin' AND password ='1234'";

$resultados = $db->query($sql);

if(isset($enviar)) {
    foreach ($resultados as $resultado){
        if ($resultado['user'] == $usuario && $resultado['password'] == $password) {
            session_start();
            $_SESSION['logeado'] = true;
            header('location:indexAdmin.php');
            exit();
        } else {
            $_SESSION['logeado'] = false;
            session_destroy();
            header('location:index.php');
            exit();
        }
    }
}
