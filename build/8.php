<?php
	require_once 'vendor/connect.php';
	include 'vars.php';
	
	echo $twig->render('site/8.twig', array(
		'form' => $form
	));
?>