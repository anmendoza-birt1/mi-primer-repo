<?php

//require_once dirname(path:__DIR__) . '/app/controladores/IdController.php';
//require_once dirname(path:__DIR__) . '/app/modelos/IdModel.php';

use app\core\Autoload;
use app\modelos\IdModel;
use app\controladores\IdController;

require __DIR__ . '/../vendor/autoload.php';

$controller = new IdController();
$idconverted = $controller->convertir(id: $_GET['id']);

var_dump(value: $_GET["id"]);

?> 