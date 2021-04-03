<?php

require_once ('../modelo/Tupla.php');
require_once ('../dataAccess/DataAccess.php');

class PelisQueVioDao {
    
    function listarVistas()
    {
        $tuplas = array();
        $tupla = new Tupla(null, null);
        $cn = new DataAccess();
        $parametros = array();
        
        
        $sql = "select distinct pqv1.usuario as usuario1, pqv2.usuario as usuario2
from pelis_que_vio pqv1, pelis_que_vio pqv2
where pqv1.usuario < pqv2.usuario and not exists
( select * from pelis_que_vio pqv3 where pqv1.usuario = pqv3.usuario and 
not exists (select * from pelis_que_vio pqv4 where pqv2.usuario = pqv4.usuario and pqv3.pelicula_id=pqv4.pelicula_id))
and not exists ( select * from pelis_que_vio pqv3 where pqv2.usuario = pqv3.usuario and not exists 
(select * from pelis_que_vio pqv4 where pqv1.usuario = pqv4.usuario and pqv3.pelicula_id = pqv4.pelicula_id));";
        $datos = $cn->consultar($sql,$parametros);
        foreach ($datos as $fila) 
        {
            $tupla = new Tupla($fila["usuario1"],$fila["usuario2"]);
            $tuplas[] = $tupla;
       
        }
        return $tuplas;
    }
    
    function listarNoVistas()
    {
        $cn = new DataAccess();
        $parametros = array();

        $sql = "SELECT listarNoVistas()";
        $cn->ejecutar($sql,$parametros);
    }
}