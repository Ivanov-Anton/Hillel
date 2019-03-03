<?php

	if (!isset($_POST['id'])) {
		header('Location: index.php');
	}

	require_once('db_connect.php');

	$sql = 'update hotels
		set 
			title = :title,
			shortDescription = :shortDescription,
			description = :description 
		where
			id = :id
	';

	try {
		$query = $db->prepare($sql);

		$query->bindValue(':title', $_POST['title']);
		$query->bindValue(':shortDescription', $_POST['shortDescription']);
		$query->bindValue(':description', $_POST['description']);
		$query->bindValue(':id', $_POST['id']);

		$query->execute();

		header('Location: index.php');
	} catch (PDOException $e) {
		$message = 'Cannot update hotel';
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update hotel</title>
</head>
<body>
	<?=$message?><br>
	<a href="edit.php?id=<?=$_POST['id']?>">Edit hotel</a>
</body>
</html>