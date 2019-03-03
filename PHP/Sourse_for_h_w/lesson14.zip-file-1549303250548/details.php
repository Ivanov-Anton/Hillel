<?php
	require_once('Application.php');
	require_once('Product.php');
	require_once('ProductFactory.php');

	Application::connectDb();

	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	$product = ProductFactory::createFromDb($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$product->title?></title>
</head>
<body>
	<?=$product->getInfo()?>
</body>
</html>