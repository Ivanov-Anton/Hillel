<?php 
	$titlePageName = 'Товары';
	$descrPage = 'Привет мой уровень php уже lavel_5!!!';
	// Creating Array for Table Home worrk 12 dec 5:01
	$tovars = [
		[
			'name' => 'Fanta',
			'price' => 8,
			'cat' => 'drink',
		],
		[
			'name' => 'Coca-cola',
			'price' => 24,
			'cat' => 'drink',
		],
		[
			'name' => 'Sandora',
			'price' => 18,
			'cat' => 'drink',
		],
		[	'name' => 'Pepsi',
			'price' => 17,
			'cat' => 'driink',
		],
		[
			'name' => 'Tomato',
			'price' => 50,
			'cat' => 'food',
		],
		[
			'name' => 'Potate',
			'price' => 15,
			'cat' => 'food',
		],
		[
			'name' => 'Flint',
			'price' => 4,
			'cat' => 'food',
		],
		[
			'name' => 'Orol_B',
			'price' => 6,
			'cat' => 'food',
		],
		[
			'name' => 'Fish',
			'price' => 80,
			'cat' => 'food',
		],
		[
			'name' => 'Ckeice',
			'price' => 2,
			'cat' => 'food',
		],
	];	
	//  discount for all tovars example: 34%
	$discount = '10%';
	$discount /= 100;
	// code for calculation discount
	foreach ($tovars as $key => $tovar) {
		$currentPrice = $tovars[$key]['price'];
		$currentDiscount = $currentPrice * $discount;
		$priceWithDiscount = $currentPrice - $currentDiscount;
		// change the price of the current tovar
		$tovars[$key]['price'] = $priceWithDiscount;
	}
?>
<html>
<?php include_once 'head.php' ?>
<body>
	<div class='container'>
		<?php include_once 'header.php'?>
		<h2 class='text-center'>Накладная для магазина Santim</h2>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>Название товара</th>
					<th>Категория</th>
					<th>Цена за один</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($tovars as $key => $tovar): ?>
					<tr>
						<th><?= $tovar['name'] ?></th>
						<td><?= $tovar['cat'] ?></td>
						<td><?= $tovar['price'] ?> грн. </td>
					</tr>
				<?php endforeach; ?>
				
				</tr>
			</tbody>
		</table>
		<?php include_once 'footer.php' ?>
	</div> <!-- END container -->
</body>
</html>