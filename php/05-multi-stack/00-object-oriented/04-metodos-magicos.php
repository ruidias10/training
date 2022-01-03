<?php

////// métodos mágicos
class Cliente {

  private $nome;

  public function __construct()
  {
    $this->nome = "Class Cliente";
    echo "__construct - Construtor da class Cliente<br>";
  }

  public function __toString()
  {
    return "__toString - Sou a class Cliente<br>";
  }

  public function __invoke()
  {
    return "__invoke - class chamada como função<br>";
  }

  public function __destruct()
  {
    echo "__destruct - Destrutor da class Cliente<br>";
  }

  public function __call($name, $arguments)
  {
    echo "__call - Metodo invalido chamado na class Cliente: ".$name . " " . implode(', ', $arguments)."<br>";
  }

  public function __debugInfo()
  {
    return [
      "nome" => "__debugInfo é usado quando o var_dump() ou print_r()"
    ];
  }

  public function __serialize(): array
  {
      echo "__serialize - ";
      return [
        'nome' => $this->nome
      ];
  } 

  public function __sleep()
  {
      echo "__wakeup - ";
      return array('nome');
  }

  public function __wakeup()
  {
      echo "__wakeup - Antes de executar unserialize, otimo para reativar connect() com BD ou FTP<br>";
  }  
  
  public function mostra_nome() {
    echo "mostra_nome - Metodo chamado depois de unserialize: " . $this->nome . "<br>"; 
  }

}

$cliente = new Cliente;
$cliente->metodoInvalido('Qualquer coisa');
echo $cliente;
echo $cliente();

var_dump($cliente);
print_r($cliente);


print "<br><br>Serialize:<br>";
$serializeCliente = serialize($cliente);
file_put_contents('store', $serializeCliente);
echo $serializeCliente;

print "<br><br>Unserialize:<br>";
$fc = file_get_contents('store');
$unserializeCliente = unserialize($fc);
$unserializeCliente->mostra_nome();
echo $unserializeCliente;

print "<br><br>";
