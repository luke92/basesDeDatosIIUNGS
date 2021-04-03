<?php

require_once ('../modelo/Pelicula.php');
require_once ('../dataAccess/DataAccess.php');

class PeliculaDao {
    
    function listarPeliculas()
    {
        $peliculas = array();
        $pelicula = new Pelicula(null, null);
        $cn = new DataAccess();
        $sql = "SELECT listarPeliculas()";
        $datos = $cn->consultar($sql,null);
        foreach ($datos as $fila) 
        {
            $pelicula = new Pelicula($fila["pelicula_id"],$fila["pelicula_nombre"]);
            $peliculas[] = $pelicula;
       
        }
        return $peliculas;
    }
}