<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["password"]);

header('location:../index.php');
session_destroy();

?>