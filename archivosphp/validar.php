<?php
require_once("conexion.php");
$usuario = '';
$password = '';
$usuario = $_POST['user'];
$password = $_POST['password'];

$enviar = $_POST['enviar'];

$db = new Conexion();

$sql = "SELECT * FROM usuarios WHERE user = 'admin' AND password='1234'";

$resultados = $db->query($sql);


if(isset($enviar)) {
    foreach ($resultados as $resultado){
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
}
?>