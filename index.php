<?php

require_once 'vendor/autoload.php';

use \Quantr\PhpIsDead\PhpIsDead;
use \Quantr\PhpIsDead\Controller;
use \Quantr\PhpIsDead\Request;

class IndexController extends Controller
{
	function index(Request $request) {}
	public static function a(Request $request)
	{
		echo "this is a<br>";
	}
}

$phpIsDead = new PhpIsDead();
$phpIsDead->start();
$phpIsDead->router->add('/index', IndexController::class, 'index');
$phpIsDead->router->add('/a', IndexController::class, 'a');
echo $phpIsDead->router->toString();

$phpIsDead->router->process($_SERVER['REQUEST_URI']);

echo "<br>" . $_SERVER['REQUEST_URI'];
