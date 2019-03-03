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
	<title>Edit hotel</title>
</head>
<body>
	<h1>Update hotel #<?=$hotel->id?></h1>
	<form action="update.php" method="POST">
		<input type="hidden" name="id" value="<?=$hotel->id?>">
		<div>
			<label>Title</label>
			<input 
				type="text" 
				name="title" 
				value="<?=$hotel->title?>"
			>
		</div>
		<div>
			<label>Short Description</label>
			<input type="text" name="shortDescription"
				value="<?=$hotel->shortDescription?>"
			>
		</div>
		<div>
			<label>Description</label>
			<textarea name="description"><?=$hotel->description?></textarea>
		</div>
		<button type="submit">Update Hotel</button>
	</form>
	<a href="index.php">List</a>
</body>
</html>