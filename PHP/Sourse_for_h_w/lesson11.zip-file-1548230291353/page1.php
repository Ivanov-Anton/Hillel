<?php
	require_once('Product.php');
	require_once('Notebook.php');
	require_once('Phone.php');
	require_once('ProductInfo.php');

	$products = [];

	$products[] = new Notebook(
		'Macbook',
		2100,
		'Notebook',
		'HDD'
	);

	$products[] = new Phone(
		'Samsung',
		700,
		'Phone',
		2
	);

	class Test extends Product
	{

	}

	$products[] = new Test;

	// var_dump($products);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Products List</title>
</head>
<body>
	<ul>
		<?php foreach ($products as $product) : ?>
			<?php $productInfo = new ProductInfo($product) ?>
			<?=$productInfo->getListItem()?>
		<?php endforeach ?>
	</ul>
</body>
</html>