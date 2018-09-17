<?php
	require_once 'vendor/connect.php';
	include 'vars.php';
	
	echo $twig->render('site/2.twig', array(
		'form' => $form
	));
?>