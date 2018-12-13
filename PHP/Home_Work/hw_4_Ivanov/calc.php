<?php

	// Переменная входящего ко-во гривны 
$valuteInput = 1500;

// Расчет EURO
$kursEUR = 29.408;
$inputEURO = 51;
$outputEURO = round($valuteInput / $kursEUR, 0);

$kursUSD = 26.315;
$inputUSD = 57;
$outputUSD = round($valuteInput / $kursUSD, 0);



?>a

<html>
<head>

	<title>Калькулятор</title>
	<meta charset="utf-8">
	<meta name="description" content="Калькулятор для конвертирование валюты.">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap.css">
	
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-dark bg-dark navbar-expand">
			
			<a class="navbar-brand col-md-2" href="index.php">
				Hillel.com.UA
			</a>
							
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="index.php">Главная</a></li>					
					<li class="nav-item"><a class="nav-link" href="calc.php">Калькулятор</a></li>
					<li class="nav-item"><a class="nav-link" href="contacts.php">Контакты</a></li>
				</ul>
			</div>
			
		</nav> <!-- end nav  -->
		
		<h2 class="text-center">Конвертер валют</h2>
		<div class="valutaBlock col-md-4" >
			<strong><?php echo "Пример $valuteInput грн. - это \$57 или $outputEURO Евро" ?></strong>
			<form>
				<div class="form-group">
					<label for="valuteIdInput">Выберите валюту</label>
					<select class="form-control" id="valuteIdInput">
						<option value="">- Из валюты -</option>
						<option value="UAH">Гривна</option>
						<option value="USD">Доллар</option>
						<option value="EUR">Евро</option>
						<option value="RUB">Рубль</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="number">Количество</label>
					<input type="text" name="number" id="number" class="form-control" value="<?= $valuteInput ?>" disabled>
				</div>
				
				<div class="form-group">
					<label for="valuteIdOutput">Выберите валюту</label>
					<select class="form-control" id="valuteIdOutput">
						<option value="">- В валюту -</option>
						<option value="UAH">Гривна</option>
						<option value="USD">Доллар</option>
						<option value="EUR">Евро</option>
						<option value="RUB">Рубль</option>
					</select>
				</div>
				
				<button type="button" class="btn btn-default mr-3">Конвентировать</button>
				<strong><?= $outputEURO . ' EURO,' ?></strong>
				<strong><?= $outputUSD . ' USD' ?></strong>
			</form>
			
		</div> <!-- *** valueBlock END ***  -->
		
		<div class="footer navbar navbar-dark bg-dark navbar-expand col-md-12">
			<a class="navbar-brand col-md-2" href="index.php">
				Hillal.com.UA
			</a>
			
			<div class="collapse navbar-collapse" >
				<div class="navbar-nav col-md-12">						
					<h6 class="col-md-12"><a class="nav-item nav-link text-right" href="contacts.php">phplearn © 2018.</a></h6>
				</div>
			</div>
			
		</div> <!-- FOOTER end -->
	</div> <!-- end conteiner -->
</body>
</html>