<?php

namespace app\core;

use app\routes\Routes;
use app\support\TypeUri;
use app\support\Uri;

class RouterFilter
{

    private string $uri;
    private string $method;
    private array $arrayRoutes;


    public function __construct()
    {
        $this->uri = Uri::staticUri();
        $this->method = TypeUri::get();
        $this->arrayRoutes = Routes::get();
    }

    private function simpleRoute()
    {
        if ($this->arrayRoutes[$this->method][$this->uri]) {

            return $this->arrayRoutes[$this->method][$this->uri];
        }

        return "NotFoundController@index";
    }

    public function get()
    {
        return $this->simpleRoute();
    }
}
