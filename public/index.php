<?php

use TG\Project01\App\Router;
use TG\Project01\Config\Database;
use TG\Project01\Controller\HomeController;
use TG\Project01\Controller\PlayerController;


require_once __DIR__ . '/../vendor/autoload.php';


Database::getConnection('prod');

// home
Router::add('GET', '/', HomeController::class, 'index', []);

// squad
Router::add('GET', '/player', PlayerController::class, 'index', []);


Router::run();