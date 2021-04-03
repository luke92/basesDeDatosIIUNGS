<?php

class Pelicula 
{
    private $_id;
    private $_usuario;
    
    public function __construct($id, $pelicula) 
    {
        $this->_id = $id;
        $this->_pelicula = $pelicula;
    }
    
    function getId() {
        return $this->_id;
    }

    function getUsuario() {
        return $this->_usuario;
    }

    function setId($id) {
        $this->_id = $id;
    }

    function setUsuario($usuario) {
        $this->_usuario = $usuario;
    }


}


