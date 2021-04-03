<?php

require_once ('../modelo/Persona.php');
require_once ('../dataAccess/DataAccess.php');
require_once ('../util/Encriptador.php');

class PersonaDao {
    
    function agregar(Persona $persona)
    {
        $cn = new DataAccess();
        $parametros = array($persona->getUsuario(),encryptPwd($persona->getClave()),$persona->getNombre(),$persona->getApellido());

        $sql = "SELECT agregarPersona($1,$2,$3,$4)";
        $cn->ejecutar($sql,$parametros);
    }
    
    function login(Persona $persona)
    {
        $band = false;
        $cn = new DataAccess();
        $parametros = array($persona->getUsuario());
        $sql = "SELECT * FROM persona WHERE usuario = $1";
        $datos = $cn->consultar($sql,$parametros);
        foreach ($datos as $fila) 
        {
            if(passwordsEquals($persona->getClave(), $fila["clave"]))
            {
                $persona->setNombre($fila["nombre"]);
                $persona->setApellido($fila["apellido"]);
                $band = true;
		echo "Clave verificada";
            }
        }
        return $band;
    }
    
    function cambiarContraseña(Persona $persona)
    {
        $cn = new DataAccess();
        $parametros = array($persona->getUsuario(),encryptPwd($persona->getClave()));

        $sql = "SELECT cambiarContrasena($1,$2)";
        $cn->ejecutar($sql,$parametros);
    }
}
