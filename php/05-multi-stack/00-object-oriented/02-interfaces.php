<?php

////// interfaces - polimorfismo
interface Saldo 
{
  public function depositar($valor);
  public function levantar($valor);
}

class Cliente implements Saldo 
{
  private $saldo;

  public function depositar($valor){
    $this->saldo = ($this->saldo + $valor) * 1.20;
  }

  public function levantar($valor){

  }
}

class Fornecedor implements Saldo 
{
  private $saldo;

  public function depositar($valor){
    $this->saldo = $this->saldo + $valor;
  }

  public function levantar($valor){

  }
}


// polimorfismo e substituição de Liskov
function realizarDeposito(Saldo $pessoa, int $valor){
  $pessoa->depositar($valor);
}


$cliente = new Cliente;
realizarDeposito($cliente, 10);
var_dump($cliente);

$fornecedor = new Fornecedor;
realizarDeposito($fornecedor, 10);
var_dump($fornecedor);