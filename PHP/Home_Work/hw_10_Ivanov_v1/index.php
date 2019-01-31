<?php require_once('mainController.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Отели</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="html+css/style.css">
</head>
<body>
	<?php include('html+css/header_navbar.html'); ?>
	<div class="container">
		<?php include('leftBar.php') ?> <!-- leftBar col-md-3 border-1 float-left m-0 p-0 -->
		<!-- HotelList BEGIN -->
		<div class="hotelList col-sm-12 col-md-8 col-lg-9 float-right pr-sm-0 pr-md-0 pr-lg-0 pr-xl-0 pl-sm-0 pl-md-3 pl-lg-3 pl-xl-3 px-0">
			<?php foreach($hotels as $key => $hotelItem): ?>
				<div class="card mt-3 shadow-sm">
					<h5 class="card-header"><?= $hotelItem->getTitle() ?></h5>
					<div class="card-body">
						<p class="card-text text-justify"><?= $hotelItem->getShortDescription() ?></p>
						<a href="viewHotel.php?id=<?= $key ?>" class="btn btn-primary col-sm-6  col-lg-3 col-xl-2">Подробнее</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- HotelList END -->
	</div>
	<?php include('html+css/footer.html'); ?>
</body>
</html>