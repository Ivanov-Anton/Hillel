<?php

    $valuteInput = 1500;
    $kursURS;
    $kursEUR = 29.412;
    $inputEURO = 51;
    $outputEURO = round($inputEURO * $kursEUR,0);

?>  

<html>
<head>

	<title>Калькулятор</title>
	<meta charset="utf-8">
	<meta name="description" content="Калькулятор для конвертирование валюты.">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-dark bg-dark navbar-expand">
			
            <a class="navbar-brand col-md-2" href="index.php">
                <img src="img/logo.jpg">
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
           
            <form>
                <div class="form-group">
                    <label for="valuteId"></label>
                    <select class="form-control">
                        <option value="">- Из валюты -</option>
                        <option value="UAH">Гривна</option>
                        <option value="USD">Доллар</option>
                        <option value="EUR">Евро</option>
                        <option value="RUB">Рубль</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="number">Количество</label>
                    <input type="text" name="number" id="number" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="valuteId"></label>
                    <select class="form-control">
                        <option value="">- В валюту -</option>
                        <option value="UAH">Гривна</option>
                        <option value="USD">Доллар</option>
                        <option value="EUR">Евро</option>
                        <option value="RUB">Рубль</option>
                    </select>
                </div>
                
                <button type="button" class="btn btn-default">Конвентировать</button>
            </form>
            
        </div> <!-- *** valueBlock END ***  -->
        
        <div class="footer navbar navbar-dark bg-dark navbar-expand col-md-12">
            <a class="navbar-brand col-md-2" href="index.php">
                <img src="img/logo.jpg">        
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