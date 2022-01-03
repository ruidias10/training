<?php

////// classes abstrata
abstract class Atendimento {
  public $data;
  private $tempo;
  protected $valor;

  public function definirTempo($tempo) {
    if ($tempo < 1) {
      echo "Não é possivel adicionar um tempo menos que 1";
      return;
    }

    $this->tempo = $tempo;
  }
}

class Diaria extends Atendimento {
  public function definirValor($valor) {
    $this->valor = $valor;
  }
}

$diaria = new Diaria;
$diaria->data = "2000-01-01";
$diaria->definirValor(100);
$diaria->definirTempo(10);

var_dump($diaria);