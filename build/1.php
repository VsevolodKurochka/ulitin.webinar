<?php
	require_once 'vendor/connect.php';
	include 'vars.php';
	
	echo $twig->render('site/1.twig', array(
		'form' => $form
	));
?>