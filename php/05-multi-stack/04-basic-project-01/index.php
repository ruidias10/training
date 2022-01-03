<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Controller\Service;

$service = new Service();
$service->listAll();