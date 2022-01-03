<?php

////// traits
trait SlugNome
{
  public function slug(): string {

    if (!property_exists($this, "nome")) {
      throw new RuntimeException("Falta o atributo nome");
    }

    return strtolower(
      preg_replace('/[^A-Za-z0-9-]+/', '-', $this->nome)
    );
  }
}

class Curso 
{
  use SlugNome;
  public $nome;

  public function __construct($nome)
  {
    $this->nome = $nome;
  }
}

class Formacao 
{
  use SlugNome;
  private $nome;

  public function __construct($nome)
  {
    $this->nome = $nome;
  }  
}

$curso = new Curso("Curso de MSDOS");
var_dump($curso->slug());

$formacao = new Formacao("Curso de SHELL");
var_dump($formacao->slug());