<?php

  namespace Ruidias\BasicComposer;

  class Search {
    private $base_path = "https://viacep.com.br/ws/";


    public function getAddressFromZipCode(string $zipCode): array{

      $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

      $result = file_get_contents($this->base_path . $zipCode . '/json');
      $result = json_decode($result, true);

      return $result;
    }
  }