<?php

  require_once "vendor/autoload.php";


  use Ruidias\BasicComposer\Search;

  $search = new Search();

  $result = $search->getAddressFromZipCode('01001000');

  print_r($result);