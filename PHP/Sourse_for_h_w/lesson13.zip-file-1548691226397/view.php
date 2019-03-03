<?php

	require_once('db_connect.php');

	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	$sql = 'select * from hotels where id = :id';

	$query = $db->prepare($sql);

	$query->bindValue(':id', $_GET['id']);

	$query->execute();

	$hotel = $query->fetchObject();

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Hotel</title>
</head>
<body>
	<h1><?=$hotel->title?></h1>
	<p>Short description: <?=$hotel->shortDescription?></p>
	<p>Description:<br><?=$hotel->description?></p>
	<a href="index.php">List</a>
</body>
</html>