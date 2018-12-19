<?php

	$student = [
		'name' => 'Alex', 
		'age' => 38, 
		'email' => 'alex@gmail.com', 
		'phone' => '+383423434',
	];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student's info</title>
</head>
<body>
	<table>
		<tr>
			<td>Name:</td>
			<td><?= $student['name'] ?></td>
		</tr>
		<tr>
			<td>Age:</td>
			<td><?= $student['age'] ?></td>
		</tr>
	</table>
</body>
</html>