<?php

use PHPUnit\Framework\TestCase;
use Ruidias\BasicComposer\Search;

class SearchTest extends TestCase {

  public function testGetAddressFromZipCodeBasicUsage() {
    $search = new Search();

    $result = $search->getAddressFromZipCode('01001000');

    $expected = [
      "cep" => "01001-000",
      "logradouro" => "Praça da Sé",
      "complemento" => "lado ímpar",
      "bairro" => "Sé",
      "localidade" => "São Paulo",
      "uf" => "SP",
      "ibge" => "3550308",
      "gia" => "1004",
      "ddd" => "11",
      "siafi" => "7107"
    ];

    $this->assertEquals($expected, $result);
  }


  /**
   * @dataProvider dataColectionTest
   */
  public function testGetAddressFromZipCodeDefaultUsage(string $input, array $expected) {
    $search = new Search();

    $result = $search->getAddressFromZipCode($input);

    $this->assertEquals($expected, $result);
  }


  public function dataColectionTest():array {
    return [
      "CEF 01001-000" => [
        "01001000",
        [
          "cep" => "01001-000",
          "logradouro" => "Praça da Sé",
          "complemento" => "lado ímpar",
          "bairro" => "Sé",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "ibge" => "3550308",
          "gia" => "1004",
          "ddd" => "11",
          "siafi" => "7107"
        ]
      ],
      "CEF 03624-010" => [
        "03624010",
        [
          "cep" => "03624-010",
          "logradouro" => "Rua Luís Asson",
          "complemento" => "",
          "bairro" => "Vila Buenos Aires",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "ibge" => "3550308",
          "gia" => "1004",
          "ddd" => "11",
          "siafi" => "7107"
        ]
      ]      
    ];
  }
}