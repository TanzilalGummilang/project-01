<?php

use TG\Project01\App\Router;
use TG\Project01\Controller\HomeController;

require_once __DIR__ . '/../vendor/autoload.php';

Router::add('GET', '/', HomeController::class, 'index', []);

Router::run();