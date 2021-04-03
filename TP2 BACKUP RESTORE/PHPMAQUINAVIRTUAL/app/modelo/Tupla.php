<?php

class Tupla 
{
    private $_usuario1;
    private $_usuario2;
    
    public function __construct($usuario1, $usuario2) 
    {
        $this->_usuario1 = $usuario1;
        $this->_usuario2 = $usuario2;
    }
    function getUsuario1() {
        return $this->_usuario1;
    }

    function getUsuario2() {
        return $this->_usuario2;
    }

    function setUsuario1($usuario1) {
        $this->_usuario1 = $usuario1;
    }

    function setUsuario2($usuario2) {
        $this->_usuario2 = $usuario2;
    }



}

