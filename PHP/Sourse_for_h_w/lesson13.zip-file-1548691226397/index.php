<?php

	require_once('db_connect.php');

	$hotels = $db->query('select * from hotels');

	$hotelsArray = $hotels->fetchAll();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotels List</title>
</head>
<body>
	<h1>Hotels</h1>
	<a href="addHotel.php">Add Hotel</a>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Actions</td>
		</tr>
		<?php foreach ($hotelsArray as $hotel) : ?>
			<tr>
				<td><?=$hotel['id']?></td>
				<td><?=$hotel['title']?></td>
				<td>
					<a href="view.php?id=<?=$hotel['id']?>">View</a>
					<a href="edit.php?id=<?=$hotel['id']?>">Edit</a>
					<a href="delete.php?id=<?=$hotel['id']?>" onclick="return confirm('Are you sure?')">Delete</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>