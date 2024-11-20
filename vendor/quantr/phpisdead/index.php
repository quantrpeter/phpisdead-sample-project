<?php

require_once 'vendor/autoload.php';

$class = new \Quantr\PhpIsDead\Model();

use \Quantr\PhpIsDead\Router;

$router=new Router();
$router->add('/index', 'peter');
echo $router->toString();
