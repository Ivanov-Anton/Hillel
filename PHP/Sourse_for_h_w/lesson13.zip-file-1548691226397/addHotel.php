<?php
	// var_dump($_POST);
	require_once('db_connect.php');

	if (isset($_POST['title'])) {

		$sql = 'insert into hotels set 
			title = :title,
			shortDescription = :shortDescription,
			description = :description
		';

		try {
			// $db->exec($sql);

			$query = $db->prepare($sql);

			// var_dump($query);die;

			$query->bindValue(':title', $_POST['title']);
			$query->bindValue(
				':shortDescription', 
				$_POST['shortDescription']
			);
			$query->bindValue(
				':description', 
				$_POST['description']
			);

			$query->execute();

			header('Location: index.php');
		} catch (PDOException $e) {

			$error = 'ERROR Add hotel!';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Hotel</title>
</head>
<body>
	<h1>Add new hotel</h1>
	<?php if (isset($error)) : ?>
		<p><?=$error?></p>
	<?php endif ?>
	<form method="POST">
		<div>
			<label>Title</label>
			<input type="text" name="title">
		</div>
		<div>
			<label>Short Description</label>
			<input type="text" name="shortDescription">
		</div>
		<div>
			<label>Description</label>
			<textarea name="description"></textarea>
		</div>
		<button type="submit">Update Hotel</button>
	</form>
</body>
</html>