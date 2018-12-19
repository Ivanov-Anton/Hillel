<?php

	$students = ['John', 'Ann', 'Julia', 'Alex'];

	// echo $students[0] . '<br>';
	// echo $students[1] . '<br>';
	// echo $students[2] . '<br>';
	// echo $students[3] . '<br>';

	$b = 10;

	$a = (10 == $b);

	// var_dump($a);

	$x = 1;

	while ($x <= 10) {
		echo $x . '<br>';

		// $x = $x + 1;
		// $x += 1; // *= , .= , -=
		$x++; // $x--
	}

	echo '<br>';

	$x = 10;
	while ($x >= 1) {
		echo $x . '<br>';
		$x--;
	}

	$i = 0;

	echo '<br>';

	while ($i <= 3) {
		echo $students[$i] . '<br>';
		$i++;
	}

	//


	while (false) {
		echo 'Hello world';	
	}

	do {
		echo 'Hello world';
	} while (false);

	//

	echo '<br>';

	$count = count($students);

	echo $count;

	for ($x = 0; $x < $count; $x++) {
		// echo $x . '<br>';
		echo $students[$x] . '<br>';
	}

	//

	echo '<br><br>';

	foreach ($students as $student) {
		echo $student . '<br>';
	}

	// 

	$product = [
		'name' => 'Macbook',
		'price' => 2000,
		'category' => 'Notebook',
	];

	foreach ($product as $field => $value) {

		$value .= '!';

		$product[$field] = $value;

		echo $field . ' : ' . $value . '<br>';
	}

	echo '<pre>';

	var_dump($product);

