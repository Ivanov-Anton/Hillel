<?php

	require_once('db_connect.php');

	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	$sql = 'delete from hotels where id = :id';

	$query = $db->prepare($sql);

	$query->bindValue(':id', $_GET['id']);

	$query->execute();

	header('Location: index.php');