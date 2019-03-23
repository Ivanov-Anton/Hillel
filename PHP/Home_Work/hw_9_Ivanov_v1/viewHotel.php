<?php require_once('mainController.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $titleHotel ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="html+css/style.css">
</head>
<body>
	<?php include('html+css/header_navbar.html'); ?>
	<div class="container">
		<?php if($isResponseSuccess): ?>
			<?php include('leftBar.php'); ?> <!-- leftBar co-sm-12 col-md-4 border-1 col-lg-3 float-left m-0 p-0 -->
			<!-- \\\ aboutHotel BEGIN \\\ -->
			<div class="aboutHotel text-justify col-md-8 col-lg-9 float-right">
				<div class="row">
				<h1 class="m-auto pb-3 pt-3 text-center mb-md-3 " >
					<span class="badge badge-dark <?= $isPremier ? premier : '' ?>"><?= $titleHotel ?></span>
				</h1>
				</div>
				<div class="description">
					<img class="col-12 col-sm-12 col-md-6 col-lg-6 float-right mb-3 mb-sm-3 mb-md-3 mb-lg-0 mb-xl-0" alt="Премиум отель" src="https://s-ec.bstatic.com/images/hotel/max1024x768/468/46871800.jpg" alt="" width="30%" class="float-right">
					<p class="description-text"><?= $hotels[$idHotel]->getDescription() ?></p>
				</div>
			</div>
			<!-- \\\ aboutHotel END \\\ -->
		<?php elseif(!$isResponseSuccess): ?>
			<div class="alert alert-danger mt-5 mb-5 mx-auto col-md-4 col-sm-9 text-center">
				Выберите отель на главной странице 
				<a href="index.php" class="alert-link">Главная</a>
			</div>
		<?php endif; ?>
	</div> <!-- end container with Maincontent  -->
	<?php include('html+css/footer.html'); ?>
</body>
</html>