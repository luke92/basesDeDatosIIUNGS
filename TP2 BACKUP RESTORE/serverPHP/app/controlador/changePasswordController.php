<?php

require_once ('../modelo/Persona.php');
require_once ('../servicio/PersonaDao.php');
require_once ('../util/Sesion.php');

$newURL = '../../changePassword.php';

$passwordActual = filter_input(INPUT_POST, "passwordActual");
$passwordNueva = filter_input(INPUT_POST, "passwordNueva");
$passwordConfirmada = filter_input(INPUT_POST, "passwordConfirmar");

if($passwordNueva != $passwordConfirmada)
{
    $newURL.= '?error=Las claves nuevas no coinciden';
}
else
{
    if($passwordActual == $passwordNueva)
    {
        $newURL.= '?error=La clave actual no puede ser igual a la nueva';
    }
    else
    {
        $persona = new Persona(getUserName(),null,null,$passwordActual);
        $personaDao = new PersonaDao();
        if(!$personaDao->login($persona))
        {
            $newURL.= '?error=La clave actual es erronea';

        }
        else
        {
            $persona->setClave($passwordNueva);
            $personaDao->cambiarContraseña($persona);
            $newURL.= '?success=Clave cambiada con exito';
        }
    }
    
}
header('Location: '.$newURL);

