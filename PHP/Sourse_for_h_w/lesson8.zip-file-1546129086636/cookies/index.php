<?php

	print_r($_COOKIE);

	// echo time();

	// zacd b p'[;

	// 	'name', 
	// 	'John', 
	// 	time() + 24 * 60 * 60
	// );

	// delete cookie:
	// setcookie(
	// 	'name', 
	// 	'John', 
	// 	time()
	// );

	print_r($_COOKIE);

	$products = [
		[
			'id' => 1,
			'name' => 'Macbook',
		],
		[
			'id' => 2,
			'name' => 'Thinkpad',
		],
	];

	echo '<br>';
	echo '<pre>';

	var_dump($products);

	$productJson = json_encode($products);

	var_dump($productJson);

	setcookie(
		'product', 
		$productJson, 
		time() + 60*60
	);

	var_dump($_COOKIE);

	$productsDecoded = json_decode($_COOKIE['product'], true);

	var_dump($productsDecoded);
