<?php

spl_autoload_register(function($className){
  echo "<br>- Incluir a class " . $className;
  require_once('src/'.$className.'.php');
});

$cliente = new Cliente;
$fornecedor = new Fornecedor;

var_dump($cliente, $fornecedor);