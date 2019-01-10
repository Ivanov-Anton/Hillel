<?php

	require_once('products.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	<?php foreach ($products as $key => $product) : ?>
		<p>
			<?=$product['title']?>
			<a href="product_details.php?key=<?=$key?>">View details</a>
		</p>
	<?php endforeach ?>
</body>
</html>