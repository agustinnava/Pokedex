<?php

class funciones
{
    public static  function getImagen($id){
        $db = new Conexion();
        $resultados = $db->query("SELECT imagen from imagen where id = '$id'");
        foreach ($resultados as $resultado){
            return $resultado["imagen"];
        }
    }

    public static  function getTipo($id){
        $db = new Conexion();
        $resultados = $db->query("SELECT imagen from tipo where id = '$id'");
        foreach ($resultados as $resultado){
            return $resultado["imagen"];
        }
    }

    public static  function getTipoIdByNombre($tipo){
        $db = new Conexion();
        $resultados = $db->query("SELECT id from tipo where tipo = '$tipo'");
        foreach ($resultados as $resultado){
            return $resultado["id"];
        }
    }

    public static function buscarImagenId($imagen){
        $db = new Conexion();
        $resultados = $db->query("SELECT * from imagen");
        foreach ($resultados as $resultado){
            if ($resultado['imagen'] == $imagen) {
                return $resultado['id'];
            }
        }
    }


    public static function datosPokemon($numero){
        $db = new Conexion();
        $resultados = $db->query("SELECT * from pokemon");
        foreach ($resultados as $resultado){
            if ($resultado['numero'] == $numero) {
                return $resultado;
            }
        }
    }

    public static function getPokemon($nombre){
        $db = new Conexion();
        $resultados = $db->query("SELECT * from pokemon");
        foreach ($resultados as $resultado){
            if ($resultado['nombre'] == $nombre) {
                return $resultado;
            }
        }
    }


    public static function listarPokemon(){
        $db = new Conexion();
        $resultados = $db->query("SELECT * from pokemon");
        return $resultados;
    }

    public static function listarTipos(){
        $db = new Conexion();
        $resultados = $db->query("SELECT * from tipo");
        return $resultados;
    }

    public static function listarResultadosFiltrados($buscador){

        $db = new Conexion();

        $qry = "SELECT p.numero, p.nombre, p.descripcion, t.imagen as tipo, i.imagen FROM pokemon p LEFT JOIN imagen i ON p.imagen = i.id 
        LEFT JOIN tipo t ON p.tipo = t.id WHERE p.numero LIKE '%" . $buscador .  "%' OR t.tipo LIKE '%" . $buscador .  "%' 
        OR p.nombre LIKE '%" . $buscador .  "%'";

        $resultados = $db->query($qry);

        return $resultados;
    }
}