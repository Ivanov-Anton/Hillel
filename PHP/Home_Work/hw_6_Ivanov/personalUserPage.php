<?php 
$titlePageName = 'Личный кабинет';
$descrPage = 'Предоставление всех администраторов обслуживающий данный сайт.';
include './controller.php';		
$users['userName'] = htmlspecialchars($_GET['userName']);
$users['statusName'] = htmlspecialchars($_GET['statusName']);	
$users['ageName'] = htmlspecialchars($_GET['ageName']);
$users['commentName'] = htmlspecialchars($_GET['commentName']);
/** create a tmp element of array
* chenge statusName admin teacher and stusent
*/
switch ($users['statusName']) {
	case 'admin': 
		$users['statusName'] = 'админимтратор';		
		$users['tmpStatusName'] = $users['statusName'] . 'ов';
		break;
	case 'student':
		$users['statusName'] = 'студент';
		$users['tmpStatusName'] = $users['statusName'] . 'ов';
		break;
	case 'teacher':
		$users['statusName'] = 'преподователь';
		$users['tmpStatusName'] = $users['statusName'] . 'ей';
		break;
}

?>
<html>
	<!-- <HEAD> meta data-->
	<?php require_once 'head.php' ?>
	<!-- </HEAD> end meta data -->
<body>
	<div class="container">
		<?php include_once 'header.php'?>
			<!-- Displayed and then remove the last element of the array -->
			<h2 class="text-center succesIinfo">Поздравляем. Вы успешно зарегестрированы и добавлены в список <?= array_pop($users) ?></h2>
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
								<?php foreach ($users as $user): ?>
									<td><?= $user ?></td>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
		<?php include_once 'footer.php' ?>
	</div> <!-- END container -->
</body>
</html>