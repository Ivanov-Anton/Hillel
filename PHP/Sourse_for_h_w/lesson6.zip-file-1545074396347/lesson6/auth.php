<?php

	echo '<pre>';

	// print_r($_GET);
	// print_r($_POST);
	// print_r($_REQUEST); <-- GET + POST

	// $a = 0;
	// var_dump(isset($a));
	// die;

	// $a = true;
	// var_dump($a);
	// die;

	if (!isset($_POST['email']) || !isset($_POST['password'])) {
		header('Location: login.php');
	}

	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);

	if ($email == 'admin@email.com' && $password == '123456') {
		echo 'Hello, Admin. Welcome!';
	} else {
		echo 'Access denied';
	}

