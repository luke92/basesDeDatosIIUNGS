<?php

function encryptPwd($claveNoEncriptada)
{
    return password_hash($claveNoEncriptada, PASSWORD_BCRYPT);
}

function passwordsEquals($claveNoEncrpitada,$claveEncriptada)
{
    return password_verify($claveNoEncrpitada, $claveEncriptada);
}

