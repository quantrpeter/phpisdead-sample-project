<?php

namespace Quantr\PhpIsDead;

class Router
{
	private $routes = [];

	public function add($path, $class, $func)
	{
		$this->routes[$path] = $class . '::' . $func;
	}

	public function process($uri)
	{
		foreach ($this->routes as $key => $value) {
			if ($key == $uri) {
				$request = new Request();
				call_user_func($value, $request);
			}
		}
	}

	public function toString()
	{
		$str = "";
		foreach ($this->routes as $key => $value) {
			$str .= "> " . $key . ' -> ' . $value . "\n";
		}
		return trim($str);
	}
}
