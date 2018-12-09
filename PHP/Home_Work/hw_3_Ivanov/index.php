<?php
	$usdName = 'ДОЛЛАР';
	$europeName = 'ЕВРО';
	$rushaName = 'РУБЛЬ';
	$polandName = 'ПОЛЬСКИЙ ЗЛОТЫЙ';

?>	

<html>
<head>
	<title>Курс валют</title>
	<meta charset="utf-8">
	<meta name="description" content="Home worki lesson 2.">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
		
	<style> 
        /* Style for table (th)*/            
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
                <img src="img/logo.jpg">
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
					<th>ДОЛЛАР</th>
					<td>27,900 / 28,150</td>
					<td>28,1259</td>
					<td>28,070 / 28,130</td>
				</tr>
				<tr>
					<th><?= $europeName ?></th>
					<td>31,600 / 32,100</td>
					<td>32,0888</td>
					<td>31,930 / 32,020</td>
				</tr>
				<tr>
					<th><?= $rushaName ?></th>
					<td>0,390</td>
					<td>0,423</td>
					<td>0,416 / 0,420</td>
				</tr>
				<tr>
					<th><?= $polandName ?></th>
					<td>7,125</td>
					<td>7,4933</td>
					<td>7.300 / 7,410</td>
				</tr>
			</tbody>
		</table>        
        
        <div class="footer navbar navbar-dark bg-dark navbar-expand" style="position: fixed">
           
            <a class="navbar-brand col-md-2" href="index.php">
                <img src="img/logo.jpg">
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
