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

        // VERIFCAMOS FALLO DE CONEXION
       /* if ($this->conexion->connect_errno) {
            echo "Falló la conexión a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
        }*/
    }

    public function execute ($sql) {
        $this->conexion->query($sql);
    }

    public function query ($sql){
        $result = $this->conexion->query($sql);
        return $result->fetch_all();
    }

    public function __destruct(){
        $this->conexion->close();
    }

}

?>