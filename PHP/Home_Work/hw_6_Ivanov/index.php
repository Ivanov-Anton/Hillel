<?php 
	$titlePageName = 'Сайт университета';
	$descrPage = 'Желаете стать IT специалистом? Компьютерная школа Hillel Одесса обучает современным технологиям: Unity Game Engine, Blockchain , Data Science и Machine Learning, и другим специальностям.';
?>
<html>
	<!-- <HEAD> meta data-->
	<?php require_once "head.php" ?>
	<!-- </HEAD> end meta data -->
<body>
	<div class="container">
		<?php include_once "header.php"?>
		<h2 class="text-center">Зарегестрируйтесь на нашем сайте</h2>
		<div class="container-fluid">
			<div class="row justify-content-center mainBlock">
				<div class="col-md-5 text-center">
					<br>
					<a href="login.php" class="btn btn-info">Зарегестрироваться</a>
					<br>
					<h2>HillelUniversity.UA</h2>
				</div>
			</div>
		</div>
		<?php include_once "footer.php" ?>
	</div> <!-- END container -->
</body>
</html>