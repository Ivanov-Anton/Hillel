<?php 
	$titlePageName = 'Спосок пользователей';
	$descrPage = 'Отобразить всех пользователей из всех уровней доступа к системе и всех категорий';
	// connection Data Base :)
	require_once('DB/database.php');
?>
<html>
	<!-- <HEAD> meta data-->
	<?php require_once "head.php" ?>
	<!-- </HEAD> end meta data -->
<body>
	<div class="container">
		<?php include_once "header.php"?>
		<h2 class="text-center">Список пользователей</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Имя</th>
					<th>Категория</th>
					<th>Електронная почта</th>
					<th>Телефон</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $key => $user): ?>
					<tr>
					<th><?= $user['name'] ?></th>
					<td><?= $user['group'] ?></td>
					<td><?= $user['email'] ?></td>
					<td><?= $user['phone'] ?></td>
					</tr>
				<?php endforeach ?>
				</tr>
			</tbody>
		</table>
		<?php include_once "footer.php" ?>
	</div> <!-- END container -->
</body>
</html>