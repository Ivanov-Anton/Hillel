<?php 
	$titlePageName = 'Страница сообщенний';
	$descrPage = 'Сайт университетета';	
	require('./controller.php');
	
?>
<html>
	<!-- <HEAD> meta data-->
	<?php require_once "./head.php" ?>
	<!-- </HEAD> end meta data -->
<body>
	<div class="container ">
		<?php include_once "./header.php"?>
			<h2 class="text-center">Страница сообщений</h2>
			<div class="container-fluid text-center pageInfo">
				<br>
				<p class=""><?= $textMessage ?></p>
				
			</div>
		<?php include_once "./footer.php" ?>
	</div> <!-- END container -->
</body>
</html>
