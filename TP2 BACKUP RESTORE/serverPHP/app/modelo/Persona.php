<?php

class Persona 
{
    private $_usuario;
    private $_nombre;
    private $_apellido;
    private $_clave;
    
    public function __construct($usuario, $nombre, $apellido, $clave) 
    {
        $this->_usuario = $usuario;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_clave = $clave;
    }
    
    function getUsuario() {
        return $this->_usuario;
    }

    function getNombre() {
        return $this->_nombre;
    }

    function getApellido() {
        return $this->_apellido;
    }

    function getClave() {
        return $this->_clave;
    }

    function setUsuario($usuario) {
        $this->_usuario = $usuario;
    }

    function setNombre($nombre) {
        $this->_nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->_apellido = $apellido;
    }

    function setClave($clave) {
        $this->_clave = $clave;
    }





}

