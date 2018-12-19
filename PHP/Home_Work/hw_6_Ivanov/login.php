<?php 
	$titlePageName = 'Регистрация';
	$descrPage = 'Сайт университетета';	
?>
<html>
	<!-- <HEAD> meta data-->
	<?php require_once "head.php" ?>
	<!-- </HEAD> end meta data -->
<body>
	<div class="container ">
		<?php include_once "header.php"?>
			<h2 class="text-center">Форма регестрации</h2>
			<form method="POST" name="userData" class="col-md-4" action="/controller.php">
					<div class="input-group"> 
						<label for="namesId">ФИО *</label>
						<input type="text" class="form-control" name="userName" id="namesId" placeholder="Иновав Иван Иванович" required>
						<small class="form-text text-muted">Введите свою Ф,И,О на русском</small>
					</div>
					<div class="input-group">
						<label for="statusId" class="">Статус</label>
						<select class="form-control" id="statusId" name="statusName">
							<option value="student">Студент</option>
							<option value="admin" >Администратор</option>
							<option value="teacher">Преподователь</option>
						</select>
					</div>
					<div class="input-group">
						<label for="ageId">Возраст *</label>
						<input class="form-control" type="text" name="ageName" id="ageId" required>
					</div>
					<div class="input-group">
						<label for="commentId">Коментарий</label>
						<textarea class="form-control" id="commentId" name="commentName"></textarea>
					</div>
					<div class="input-group">
						<br>
						<button type="submit" class="form-control btn btn-primary">Отправить</button>
					</div>
			</form>
			<?php include_once "footer.php" ?>
	</div> <!-- END container -->
</body>
</html>