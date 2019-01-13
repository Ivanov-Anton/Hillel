<?php 
define('AGE_LIMIT', 18);
$resultMessage = '';
$isSuccess = false;
$getUserName = empty($_POST['userName']) ? 'Имя не указано' : htmlspecialchars($_POST['userName']);    
$getAgeName = empty($_POST['ageName']) ? 0 : htmlspecialchars($_POST['ageName']);
$getStatusName = empty($_POST['statusName']) ? '' : htmlspecialchars($_POST['statusName']);
$getCommentName = empty($_POST['commentName']) ? 'Без коментария' : htmlspecialchars($_POST['commentName']);
// $_POST for don't repeat function header
if ($_POST && $getAgeName != 0 && $getAgeName < AGE_LIMIT) {
	$resultMessage = 'Извините мы слишком молоды';
// if success
} elseif ($getAgeName >= AGE_LIMIT) {
	$isSuccess = true;
	$resultMessage = 'Поздравляем. Вы успешно зарегестрированы и добавлены в список под названием "' . $getStatusName . '"';
// enter age 0 location main page
} elseif ($_POST && $getAgeName == 0) {	
	header('Location: index.php');
} else {
// text for request in this script without POST parametr
	$resultMessage = 'Перейдите на главную страницу и введите свои данные для регистрации на сайте';
}	
?>	
<html>
	<!-- <HEAD> meta data-->
	<?php require_once "head.html" ?>
	<!-- </HEAD> end meta data -->
<body>
	<div class="container">
		<?php include_once('header.html') ?>
			<?php if ($isSuccess): ?>
				<h2 class="text-center succesIinfo"><?= $resultMessage ?></h2>
				<div class="container-fluid">
					<div class="row justify-content-center">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ФИО</th>
									<th>Статус</th>
									<th>Возраст</th>
									<th>Коментарий</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?= $getUserName ?></td>
									<td><?= $getStatusName ?></td>
									<td><?= $getAgeName ?></td>
									<td><?= $getCommentName ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			<?php elseif(!$isSuccess): ?>
				<div class="text-center pageInfo" role="alert"><br><h4><?= $resultMessage ?></h4></div>
			<?php endif ?>
		<?php include_once('footer.html') ?>
	</div> <!-- END container -->
</body>
</html>