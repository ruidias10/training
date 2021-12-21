<?php

  namespace Ruidias\BasicComposer;

  use Ruidias\BasicComposer\ws\ViaCep;

class Search
{
    public function getAddressFromZipCode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        return $this->getAddressFromWebService($zipCode);
    }

    private function getAddressFromWebService(string $zipCode): array
    {
        $get = new ViaCep();

        return $get->get($zipCode);
    }
}
