<?php

require_once ('../modelo/Persona.php');
require_once ('../servicio/PersonaDao.php');



$user = $_POST["user"];
$nombre = $_POST["firstname"];
$apellido = $_POST["lastname"];
$clave = $_POST["passwd"];



$persona = new Persona($user,$nombre,$apellido,$clave);
$personaDao = new PersonaDao();
$personaDao->agregar($persona);
echo "Usuario agregado";

$newURL = '../../index.php';

header('Location: '.$newURL);

