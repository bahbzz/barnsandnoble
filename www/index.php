<?php

	
	session_start();
	
	#defines the application path
	define ("APP_PATH", dirname(__DIR__ ). "/src/brainfood");

	#defines the home path
	define ("HOME", dirname(__DIR__));
	
	
	#require autoload.php for composer to see all files
	require "../vendor/autoload.php";

	use Dotenv\Dotenv as Dotenv;
	$dotenv = new Dotenv(dirname(__DIR__));
	$dotenv->load();

	use brainfood\libs\database as DB;
	//$db = new DB();
	DB::connect();

	# register error handler
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();

	
	# register altorouter, backslash added is used to go look for its path
	$router = new \AltoRouter();
	
	#include the route.php file & mapping the router 	
	#include APP_PATH ."/routes/route.php";

	#include the route.php file using a .env file (line 13, 14, 15)
	include $_ENV['APP_PATH'] ."/routes/route.php";

	#matching requests
	$match = $router->match();
	
	//splitting the matched url into 
	list($controller, $method) = explode("@", $match['target']);
	$obj = NULL;
	
	//if the controller is a class call it by instantiating
	if(is_callable($controller, $method)) {
		$obj = new $controller;
		call_user_func_array([$obj, $method], $match['params']);
	} else {
		echo "cannot call '.$controller->$method'.";
	}


