<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Service as ModelService;

class Service
{
  public function listAll()
  {
    $listServices = ModelService::listAll();

    require_once __DIR__ . '/../View/ListServices.php';
  }
}