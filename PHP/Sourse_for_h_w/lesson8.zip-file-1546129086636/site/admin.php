<?php

	session_start();

	if (!isset($_SESSION['email'])) {
		$_SESSION['error'] = 'Access denied';
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Area</title>
</head>
<body>
	Welcome to admin panel!<br>
	<a href="logout.php">Logout</a>
</body>
</html>