<?php

namespace PhpSymfony\Controller;

/**
 * Controller
 */
class Controller
{
    private string $route;

    private string $page;

    public function setRoute(string $route)
    {
        $this->route = $route;
    }

    public function getRoute(): string
    {
        return $this->route;
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }

    public function getPage(): string
    {
        return $this->page;
    }
}
