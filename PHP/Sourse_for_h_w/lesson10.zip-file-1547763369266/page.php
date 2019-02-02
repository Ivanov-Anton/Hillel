<?php
	require_once('Product.php');
	require_once('ProductInfo.php');

	$products = [
		new Product('Samsung', 400, 'Phone'),
		new Product('iPhone', 1200, 'Phone'),
	];

	class Test{

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>
	<h1>Products</h1>
	<ul>
		<?php foreach ($products as $product) : ?>
			<?php $productInfo = new ProductInfo($product) ?>
			<?=$productInfo->getListItem() ?>
		<?php endforeach; ?>
	</ul>
</body>
</html>