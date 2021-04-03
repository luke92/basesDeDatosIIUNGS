<?php

require_once ('../util/Sesion.php');

logout();

$newURL = '../../index.php';

header('Location: '.$newURL);