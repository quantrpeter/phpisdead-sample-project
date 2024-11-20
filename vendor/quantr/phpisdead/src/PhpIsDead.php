<?php

namespace Quantr\PhpIsDead;

use \Quantr\PhpIsDead\Router;

class PhpIsDead
{
	public $router;

	public function __construct()
	{
		$this->router = new Router();
	}
	public function start()
	{
		echo "PhpIsDead started<br>";
	}
}
