<?php

	require_once('Product.php');
	require_once('Notebook.php');
	require_once('Phone.php');

	$notebook = new Notebook(
		'Macbook',
		2100,
		'Notebook',
		'HDD'
	);

	echo $notebook->getInfo();

	echo '<br>';

	$phone = new Phone(
		'Samsung',
		700,
		'Phone',
		2
	);

	echo $phone->getInfo();

