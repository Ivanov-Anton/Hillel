<?php
	
	session_start();

	// $x = 12;
	// echo $x;
	// unset($x);
	// echo $x;

	print_r($_SESSION);

	// unset($_SESSION['name']);
	session_destroy();

	print_r($_SESSION);
