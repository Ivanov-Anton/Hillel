<?php // This is index.php file is main load file in web aplication

	/* Description for variables 
	$udsName —    Имя валюты
	$usd — 		  Цена купле
	$usdSelling — Цена продажи
	*/

	$usdName = 'ДОЛЛАР';
	$europeName = 'ЕВРО';
	$rushaName = 'РУБЛЬ';
	$polandName = 'ПОЛЬСКИЙ ЗЛОТЫЙ';

	$usd = 27.900;
	$usdSelling = 28.150; 

	$europe = 31.600;
	$europeSelling = 32.100;

	$rusha = 0.366;
	$rushaSelling = 0.429;

	$poland = 7.013;
	$polandSelling = 7.575;

	// end php operation

?>	

<html>
<head>
	<title>Курс валют less4</title>
	<meta charset="utf-8">
	<meta name="description" content="Home worki lesson 3.">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
		
	<style> 
		/* Style for table head (th)*/
		thead > tr > th {
			text-align: center;
			vertical-align: middle !important;
			background-color: #363641;
			color: white
		}
		
		tr:hover {
			background-color: rgba(127, 166, 255, 0.19);

		}
	</style>
	<link rel="stylesheet" href="style/bootstrap.css">

</head>
<body>

	<div class="container">

		<nav class="navbar navbar-dark bg-dark navbar-expand">
			<a class="navbar-brand col-md-2" href="index.php">
				Hillal.com.UA
			</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="index.php">Главная</a></li>					
					<li class="nav-item"><a class="nav-link" href="calc.php">Калькулятор</a></li>
					<li class="nav-item"><a class="nav-link" href="contacts.php">Контакты</a></li>
				</ul>
			</div>
		</nav> <!-- end navbar  -->

		<h2 class="text-center">Курс валют в украине</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Курс в гривне</th>
					<th>Наличный рынок<br>Покупка / Продажа</th>
					<th>НБУ</th>
					<th class="light">Седьмой рынок<br>Покупают / Продают</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th><?= $usdName ?></th>
					<td><?= $usd . ' / ' . $usdSelling ?></td>
					<td><?= $usd ?></td>
					<td><?= $usd . ' / ' . $usdSelling ?></td>
				</tr>
				<tr>
					<th><?= $europeName ?></th>
					<td><?= $europe . ' / ' . $europeSelling ?></td>
					<td><?= $europe  ?></td>
					<td><?= $europe. ' / ' . $europeSelling ?></td>
				</tr>
				<tr>
					<th><?= $rushaName ?></th>
					<td><?= $rusha . ' / ' . $rushaSelling ?></td>
					<td><?= $rusha ?></td>
					<td><?= $rusha. ' / ' . $rushaSelling ?></td>
				</tr>
				<tr>
					<th><?= $polandName ?></th>
					<td><?= $poland . ' / ' . $polandSelling ?></td>
					<td><?= $poland ?></td>
					<td><?= $poland. ' / ' . $polandSelling ?></td>
				</tr>
			</tbody>
		</table>

		<div class="footer navbar navbar-dark bg-dark navbar-expand">

			<a class="navbar-brand col-md-2 " href="index.php">
				Hillal.com.UA
			</a>

			<div class="collapse navbar-collapse" >
				<div class="navbar-nav col-md-12">
					<h6 class="col-md-12"><a class="nav-item nav-link text-right" href="contacts.php">phplearn © 2018.</a></h6>
				</div>
			</div>
		</div> <!-- FOOTER end -->
	</div> <!-- END container -->
</body>
</html>
