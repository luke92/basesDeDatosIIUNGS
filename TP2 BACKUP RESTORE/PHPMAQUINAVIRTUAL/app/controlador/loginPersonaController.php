<?php

require_once ('../modelo/Persona.php');
require_once ('../servicio/PersonaDao.php');
require_once ('../util/Sesion.php');

$user = filter_input(INPUT_POST, "username");
$clave = filter_input(INPUT_POST, "password");

$newURL = '../../index.php';

$persona = new Persona($user,null,null,$clave);
$personaDao = new PersonaDao();
if(!$personaDao->login($persona))
{
    $newURL.= "?error=Datos ingresados no validos";
    echo "Por favor ingrese correctamente los datos";
    
}
else
{
    login($persona->getUsuario(),$persona->getNombre(),$persona->getApellido());
}

header('Location: '.$newURL);
