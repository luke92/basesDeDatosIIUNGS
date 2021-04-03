<?php

function encryptPwd($claveNoEncriptada)
{
	return $claveNoEncriptada;
}

function passwordsEquals($claveNoEncriptada,$claveEncriptada)
{
	return $claveNoEncriptada == $claveEncriptada;
}

