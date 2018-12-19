<?php 
	$titlePageName = 'Личный кабинет';
	$descrPage = 'Предоставление всех администраторов обслуживающий данный сайт.';
	include './controller.php';		
	$user['userName'] = $_GET['userName'];
	$user['statusName'] = $_GET['statusName'];	
	$user['ageName'] = $_GET['ageName'];
	$user['commentName'] = $_GET['commentName'];
	// chenge statusName admin teacher and stusent
	switch ($user['statusName']) {
		case 'admin': $user['statusName'] = 'админимтраторов'; 
			break;
		case 'student': $user['statusName'] = 'студентов';
			break;
		case 'teacher': $user['statusName'] = 'преподовательей';
			break;
	}
?>
<html>
	<!-- <HEAD> meta data-->
	<?php require_once "head.php" ?>
	<!-- </HEAD> end meta data -->
<body>
	<div class="container">
		<?php include_once "header.php"?>
			<h2 class="text-center succesIinfo"><?= 'Поздравляем. Вы успешно зарегестрированы и добавлены в список ' . $user['statusName'] ?></h2>
				<div class="container-fluid">
					<div class="row justify-content-center">
						<table class="table table-bordered table-hover">
							<thead>
								<th>ФИО</th>
								<th>Статус</th>
								<th>Возраст</th>
								<th>Коментарий</th>
							</thead>
							<tbody>
								<?php foreach ($user as $value):?>
							<td><?=$value?></td>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
		<?php include_once "footer.php" ?>
	</div> <!-- END container -->
</body>
</html>