<?php

session_start();

function getNombreApellido()
{
    
    $nombreCompleto = $_SESSION['nombre'] . " " . $_SESSION['apellido'];
    return $nombreCompleto; 
}

function getUserName()
{
    return $_SESSION['user'];
}

function login($user,$nombre,$apellido)
{
    $_SESSION['user'] = $user;
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
}

function logout()
{
    session_destroy();
}

function isLogged()
{
    return isset($_SESSION["user"]);
}