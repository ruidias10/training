<?php

require_once 'Cliente.php';
require_once 'src/Cliente.php';

use Root\Cliente as RootCliente;
use Src\Cliente as SrcCliente;

$ab = new \Root\Cliente;
$bc = new \Src\Cliente;

var_dump($ab, $bc);


$ae = new RootCliente;
$ei = new SrcCliente;

var_dump($ae, $ei);