<?php

namespace PhpSymfony;
use PhpSymfony\Controller\Controller as Controller;

/**
 * Router
 */

class Router
{
    private array $controllers = [];

    public function addController(Controller $controller)
    {
        $this->controllers[$controller->getRoute()] = $controller;
    }

    public function getPageFromRoute(string $route)
    {
        $pagePath = $this->controllers[$route]->getPage();
        return $pagePath;
    }
}
