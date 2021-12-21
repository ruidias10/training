<?php

  namespace Ruidias\BasicComposer\ws;

class ViaCep
{
    private $base_path = "https://viacep.com.br/ws/";

    public function get(string $zipCode): array
    {
        $result = file_get_contents($this->base_path . $zipCode . '/json');

        return json_decode($result, true);
    }
}
