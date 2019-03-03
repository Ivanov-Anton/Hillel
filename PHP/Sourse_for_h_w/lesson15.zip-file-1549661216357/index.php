<?php

require_once('Product.php');
require_once('ProductsView.php');
require_once('HtmlProductsView.php');

// $view = new ProductsView; <-- fatal error

$view = new HtmlProductsView;

$view->addProduct(
	new Product(
		1, 
		'Macbook', 
		1500, 
		'Apple Notebook'
	)
);

$view->addProduct(
	new Product(
		1, 
		'Thinkpad', 
		700, 
		'Lenovo Notebook'
	)
);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>
	<h1>Products list</h1>

	<?=$view->show()?>
</body>
</html>