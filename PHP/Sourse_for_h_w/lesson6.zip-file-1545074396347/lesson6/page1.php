<?php

	// http://localhost/lesson6/page1.php?name=John&role=student

	// echo '<pre>';
	// print_r($_GET);

	$name = htmlspecialchars($_GET['name']);
	$role = htmlspecialchars($_GET['role']);

	echo 'Hello, ' . $name . ', you are a ' . $role;

	