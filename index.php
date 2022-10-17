<?php

include './include/config.php';
require_once './vendor/autoload.php';
use PhpSymfony\Controller\Controller;
use PhpSymfony\Router;

// Contain links route->page
$router = new Router();

// pour chaque page, on crée un controller
$controller = new Controller();
$controller->setRoute('/');
$controller->setPage('index.twig');

// Adding controller into router
$router->addController($controller);

$controller = new Controller();
$controller->setRoute('/articles');
$controller->setPage('./templates/articles/index.php'); //@todo adapter la route à twig

// Adding controller into router
$router->addController($controller);

// Start twig

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, []);

$templatePath = $router->getPageFromRoute($_GET['route']);

$template = $twig->load($templatePath);

echo $template->render(['toto' => 'aloha']);
