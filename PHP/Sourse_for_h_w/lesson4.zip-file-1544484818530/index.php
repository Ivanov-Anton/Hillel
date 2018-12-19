<?php
	// error_reporting(E_ALL);
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);

	$students = ['John', 'Ann', 'Julia', 'Alex'];	

	echo $students[1];
	
	echo '<pre>';
	print_r($students);

	$students[2] = 'Bob';

	print_r($students);

	$students[] = 'Steve';

	print_r($students);

	$a = [];

	$student = [
		'name' => 'Alex', 
		'age' => 38, 
		'email' => 'alex@gmail.com', 
		'phone' => '+383423434',
	];

	echo 'Name : ' . $student['name'];

	$student['address'] = 'Kanatnaya';

	print_r($student);

