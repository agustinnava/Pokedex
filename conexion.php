<?php

class Conexion{

    private $servidor;
    private $usuario;
    private $clave;
    private $base;
    private $conexion;

    public function __construct () {
        $this->servidor = 'localhost';
        $this->usuario = 'root';
        $this->clave = '';
        $this->base = 'pokedex';

        //CONEXION
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->base);

    }

    public function execute ($sql) {
       return $this->conexion->query($sql);
    }

    public function query ($sql){
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function __destruct(){
        $this->conexion->close();
    }

}

?>