<html>
<head>

	<title>Контакты</title>
	<meta charset="utf-8">
	<meta name="description" content="Контакты.">
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
		   
			
			<h2 class="text-center">Наши контакты</h2>
			
			<fieldset class="col-md-12 text-center"> <!-- Групировка елементов формы -->
				<legend>Обратная связь</legend>
				<form class="col-md-4">             
					<div class="form-group">
						<label for="name">Ваше имя:</label>
						<input type="text" name="name" id="name" placeholder="Иван" class="form-control">
					</div>                  
					<div class="form-group">
						<label for="email">Ваш емайл:</label>
						<input type="email" name="email" id="email" placeholder="ivan@mail.com" class="form-control">
					</div>                  
					<button type="submit" class="btn">Отправить</button>
				</form>
				
			</fieldset> <!-- End group element form -->
			
			<!-- Start contacts info  -->
			
			<address class="text-center">
				<strong>LearnPHP, Inc.</strong><br>
				1355 Market Street, Suite 900<br>
				San Francisco, CA 94103<br>
				<abbr title="Phone">P:</abbr> (123) 456-7890
			</address>

			<address class="text-center">
				<strong>Full Name</strong><br>
				<a href="mailto:#">support@learnphp.com</a>
			</address>    <!-- End contacts info -->
			
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