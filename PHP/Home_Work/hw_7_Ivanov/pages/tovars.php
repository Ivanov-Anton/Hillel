<?php 
$titlePageName = 'Товары';
$descrPage = 'Список всех товаров';	
$logo = 'ChinaPodval.com';
require_once('controller.php');
?>
<html>
	<!-- <HEAD> meta data-->
	<?php require_once('head.php') ?>
	<!-- </HEAD> end meta data -->
<body>
	<div class="container ">
		<?php include_once('header.php') ?>
			<section id="price">
				<div class="container">
					<div class="row header ">
						<h1 class="mx-auto p-3">Цены и описание товаров</h1>
					</div>
					<div class="row ">
						<?php foreach ($tovars as $key => $tovar): ?>
							<div class="col-md-3 col-sm-6 my-3">
								<div class="card text-center">
									<!-- Содержимое текстового контента... -->
									<div class="card-header">
										<h3><?= $tovar['title'] ?></h3>
									</div>
									<div class="card-img-top">
										<img src="/img/image.png">
									</div>
									<div class="card-body">
										<span class="price " style="text-decoration:line-through; color: red">
											<span style="color: gray"><?= isUah($tovar) ?></span>
										</span>
										<h2 class=" discount mx-auto text-center mb-0"><?= writeDiscount($tovar)['priceWithDiscount'] ?><small>грн.</small></h2><br>
										<p class="text-danger econom mt-0">эконом <?= writeDiscount($tovar)['discount'] ?> грн.</p>
										<a href="#" class="btn btn-success col-xs-12 col ">Купить</a>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</section>
			<?php include_once('footer.php') ?>
	</div> <!-- END container -->
</body>
</html>D