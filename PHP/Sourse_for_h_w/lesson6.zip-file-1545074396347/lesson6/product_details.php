<?php

	require_once('products.php');

	$key = (int) $_GET['key'];

	$product = $products[$key];

?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$product['title']?></title>
</head>
<body>
	<h1><?=$product['title']?></h1>
	<p>Price: $<?=$product['price']?></p>
</body>
</html>