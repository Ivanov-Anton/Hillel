<?php
require_once('createPerson.php');
$className;
$personObjectList = [];
foreach ($personList as $key => $personItem) {
	if ($personItem['role'] == 'student') {
		$personObjectList[] = new Student(
			$personItem['name'],
			$personItem['email'],
			$personItem['phone'],
			$personItem['rating']
		);
	} elseif($personItem['role'] == 'coach') {
		$personObjectList[] = new Coach(
			$personItem['name'],
			$personItem['email'],
			$personItem['phone'],
			$personItem['course']
		);
	}
}
?>
<html>
	<head>
		<title>Список пользователей</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="navbar narbar-expand navbar-dark bg-dark">
				<a href="index.php" class="navbar-brand">
					Logo
				</a>
				
			</div>
		</div>
		<div class='container'>
			<ul class="mx-auto py-4">
				<?php foreach($personObjectList as $person): ?>
					<li class="mb-3"><?= $person->showInfo(); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="container">
			<div class="navbar narbar-expand navbar-dark bg-dark">
				<a href="index.php" class="navbar-brand">
					Logo
				</a>
			</div>
		</div>
	</body>
</html>