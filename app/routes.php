<?php

require_once __DIR__ . '../../vendor/autoload.php';

use Zebua\Teriz\App\Router;
use Zebua\Teriz\Controller\{HomeController};
use Zebua\Teriz\Controller\ProductController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/welcome', HomeController::class, 'welcome');
Router::add('GET', '/categories', ProductController::class, 'categories');

Router::run();
