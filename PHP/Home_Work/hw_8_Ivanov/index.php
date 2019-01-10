<?php
	/**
	 * $_SESSION['user_cart'] - содержит двумерный массив купленных товаров
	 * array 0=>{array 0=>'ид_товара',1 => 'количество'}
	 */
	session_start();
	require_once('DB/DataBase.php');
	// ini_set('session.gc_maxlifetime', 60);
	// ini_set('session.cookie_lifetime', 60);
	// session_set_cookie_params(0);
	/**
	 * @var bolean
	 * Флаг для проверки была ли покупка на странице
	*/
	$isBuyProduct = empty($_SESSION['user_cart']) ? false : true;
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/style/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/style/style.css">
		<script src="js/script.js"></script>
	</head>
	<body>
		<noscript>
			<style type="text/css">
				#shopCart {
					display: block;
					right: -300px;
					border: 1px solid black;
				}
				.btnDelCart {
					display: none;
				}
			</style>
			<p class="text-center">Включите JavaScript на этом сайте!</p>
		</noscript>
		<div class="container">
			<div class="navbar navbar-dark bg-dark navbar-expand">
			<a href="index.php" class="navbar-brand">
				Logo
			</a>
			<div class="navbar-collapse collapse">
				<ul class="navbar-nav col-12">
					<li class="navbar-item">
						<a href="index.php" class="nav-link active">Главная</a>
					</li>
					<li class="col-md-12 col-sm-8 col-xl-9 col-lg-9 text-right">
						<button class="btn btn-info col-md-2 col-sm-4  align-content-end" <?= $isBuyProduct ? 'onclick="openCloseUserCart()"' : ''?>>
							Корзина
							<?= // если флаг равен TRUE значит есть купленные товары
								$isBuyProduct ? count($_SESSION['user_cart']) : ''
							?>
						</button>
						<?php if ($isBuyProduct): ?>
							<div id="shopCart" class="border-5">
								<table class="table-bordered">
									<caption class="text-center">Корзина</caption>
									<tr>
										<th>Ном.</th>
										<th>Название товара</th>
										<th>Id товара</th>
										<th>Количество</th>
									</tr>
									<?php for($count=1, $idTovar=0; $idTovar < count($_SESSION['user_cart']); $idTovar++, $count++):?>
										<?php
											/**
											 * @var count - порядковый номер в корзине покупок (количество товаров),
											 * @var $idTovar - порядковый номер внутри массива корзины
											*/
										?>
										<tr>
											<td><?= $count ?></td>
											<td><?= $tovars[$_SESSION['user_cart'][$idTovar][0]]['title'] ?></td>
											<td><?= $_SESSION['user_cart'][$idTovar][0] ?></td>
											<td><?= $_SESSION['user_cart'][$idTovar][1] ?></td>
										</tr>
									<?php endfor; ?>
								</table>
								<tr><button class="btn btn-danger col-12 btnDelCart" onclick="delCart()">Очистить корзину</button></tr>
							</div> <!-- END Shoping cart -->
						<?php endif; ?>
					</li>
				</ul>
			</div>
		</div> <!--end navbar-->
		</div> <!-- end container -->
		<div class="container">
			<div class="tableData">
				<table class=" table table-dark">
					<thead>
						<tr class="bg-dark" style="color: white">
							<th>Название товара</th>
							<th>Цена</th>
							<th>Купить</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($tovars as $numTovar => $tovar): ?>
							<tr>
								<td><?= $tovar['title'] ?></td>
								<td><?= $tovar['price_val'] ?></td>
								<td>
									<form action="cart_add.php" method="POST">
										<input type="submit" class="btn btn-dark" value="Купить">
										<input class="ml-3 col-2 rounded border-0 count text-center" type="number" name="count" min="2">
										<input type="hidden" name="by_item" value="<?= $numTovar ?>">
									</form>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>