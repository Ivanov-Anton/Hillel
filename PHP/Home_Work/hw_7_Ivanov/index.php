<?php 
$titlePageName = 'нтернет магазин';
$descrPage = 'товары из китая.';
$logo = 'ChinaPodval.com';
?>
<html>
	<!-- <HEAD> meta data-->
	<?php require_once('./pages/head.php') ?>
	<!-- </HEAD> end meta data -->
<body>
	<div class="container">
		<?php include_once('./pages/header.php') ?>
		<h2 class="text-center p-3">Интернет магазин товаров из китая</h2>
		<div class="container-fluid">
			<div class="row justify-content-center mainBlock">
				<div class="col-md-5 text-center">
					<br>
					<a href="/pages/tovars.php" class="btn btn-info mb-5 mt-4">Список товаров</a>
					<br>
					<h1 class="mt-5"><?= $logo ?></h1>
				</div>
			</div>
		</div>
		<?php include_once('./pages/footer.php') ?>
	</div> <!-- END container -->
</body>
</html>