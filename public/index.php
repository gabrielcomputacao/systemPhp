<?php

require "../vendor/autoload.php";

use app\core\RouterFilter;

session_start();

$routesRegistered = new RouterFilter;

dd($routesRegistered->get());
