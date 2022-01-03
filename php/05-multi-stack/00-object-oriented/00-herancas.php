<?php

////// heranças
class Pessoa
{
  public $nome;
  public $telefone;
  public $endereco;    

  public function setNome($nome) {
    $this->nome = $nome;
  }
  public function getNome() {
    return $this->nome;
  }

  public function setTelefone($telefone) {
    $this->telefone = $telefone;
  }  
  public function getTelefone() {
    return $this->telefone;
  }
  
  public function getEndereco() {
    return $this->endereco;
  }  
  public function setEndereco($endereco) {
    $this->endereco = $endereco;
  }   
}

class Cliente extends Pessoa
{public $nome;
  public $saldo;

  public function adicionarSaldo($valor) {
    if ($valor > 0) {
      $this->saldo += $valor;
    }
  }

  public function contratarDiarista($diarista) {

  }
}

class Diarista extends Pessoa
{
  public $chavePix;

  public function __construct($dados)
  {
    $this->setNome($dados["nome"]);
    $this->setTelefone($dados["telefone"]);
    $this->setEndereco($dados["endereco"]);
  }

  /**
   * Atende o cliente
   *
   * @param string $nomeCliente
   * @return void
   */
  public function atenderCliente($nomeCliente){
    echo "<br /> O(A) diarista ".$this->getNome()." atendeu o cliente " . $nomeCliente . ".";
  }

  /**
   * Avalia o cliente
   *
   * @param string $nomeCliente
   * @param int $nota
   * @return void
   */
  public function avaliarCliente($nomeCliente, $nota) {
    $this->atenderCliente($nomeCliente);
    echo " Avaliou o cliente com a nota " . $nota;
  }
}

$diarista = [
  "nome" => "Maria da Silva",
  "telefone" => "212101458",
  "endereco" => "Rua do Porto, 123"
];
$maria = new Diarista($diarista);
$maria->avaliarCliente("José Manuel", 10);

var_dump($maria);



$diarista = [
  "nome" => "João da Silva",
  "telefone" => "212101458",
  "endereco" => "Rua do Porto, 123"
];
$joao = new Diarista($diarista);
$joao->avaliarCliente("José Maria", 5);

var_dump($joao);
