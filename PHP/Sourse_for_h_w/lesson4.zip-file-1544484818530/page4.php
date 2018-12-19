<?php
	$products = [
		[
			'name' => 'Macbook',
			'price' => 2000,
			'category' => 'Notebook',
		],
		[
			'name' => 'Thinkpad',
			'price' => 2000,
			'category' => 'Notebook',
		],
		[
			'name' => 'Dell',
			'price' => 2000,
			'category' => 'Notebook',
		],
	];

	echo $products[1]['name'];
	die;

?>
<!DOCTYPE html>
<html>
<head>
	<title>products</title>
</head>
<body>
	<table>
		<?php foreach ($products as $product) : ?>
			<tr>
				<td><?=$product['name'] ?></td>
				<td><?=$product['price'] ?></td>
				<td><?=$product['category'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>