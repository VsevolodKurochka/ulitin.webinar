<?php
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	require_once 'autoload.php';
	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader);
?>