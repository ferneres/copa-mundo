<?php

namespace App\Routes;

use Slim\App;
use Slim\Views\PhpRenderer;

use App\Controllers\PlayerController;
use App\Controllers\TeamController;
use App\Controllers\HomeController;
use App\Controllers\InstallationController;

$settings = [
    'settings' => ['displayErrorDetails' => true],
];

$app = new App($settings);


 // Get container
 $container = $app->getContainer();

 // Register component on container
 $container['view'] = new PhpRenderer(__DIR__ . "/../Views/");
 $container['BASE_PATH'] = 'http://localhost:8080';

//Adicione suas rotas aqui!
$app->get('/', HomeController::class . ":home");
$app->get('/teams', TeamController::class . ":getAll");
$app->get('/teams/{id}', TeamController::class . ":getById");
$app->get('/teams/group/{group}', TeamController::class . ":getByGroup");
$app->get('/teams/abrev/{abrev}', TeamController::class . ":getByAbrev");
$app->get('/teams/selecao/{selecao}', TeamController::class . ":getByName");


$app->get('/players', PlayerController::class . ":getAll");
$app->get('/players/{id}', PlayerController::class . ":getById");
$app->get('/players/selecao/{idSelecao}', PlayerController::class . ":getByTeamId");
$app->get('/players/name/{name}', PlayerController::class . ":getByName");
$app->get('/players/posicao/{posicao}', PlayerController::class . ":getByPosition");


$app->get('/players/search/{search}', PlayerController::class . ":getBySearchParam");


$app->get('/install', InstallationController::class . ":install");


$app->run();
