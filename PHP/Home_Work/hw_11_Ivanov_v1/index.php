<?php require_once 'Controller.php'?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Админка</title>
    <meta charset="utf-8">
</head>
<body class="bg-secondary">
	<div class="container">
		<div class="navbar navbar-expand bg-dark navbar-dark">
			<a href="index.php" class="navbar-brand shadow-lg">
                <span class="badge badge-primary text-dark shadow">ADMINKA</span>
            </a>
			<div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="migrate_db.php" class="nav-link">Migrate</a>
                    </li>
                    <li class="nav-item">
                        <a href="del.php" class="nav-link">Del</a>
                    </li>

                    <li class="nav-item">
                        <span class="pt-3 badge nav-link text-info">
                            <?= $errorMessage ?>
                        </span>
                    </li>
                </ul>
		    </div>
		</div>
        <div class="float-left col-md-2 px-0 my-4">
            <form method="POST" action="index.php" id="formAdmin">
                <select name="category" id="" class="custom-select col-md-12 bg-light border-primary" size="3">
                    <option value="student">Студенты</option>
                    <option value="admin">Администраторы</option>
                    <option value="teacher">Преподователи</option>
                </select>
                <button type="submit" class="btn btn-primary col-md-12">Перейти</button>
            </form>
        </div>
		<div class="col-md-10 float-right">
			<h2 class="text-center">Приложение для управления учебным процессом</h2>
			<table class="table table-borderless text-light">
				<tr class="bg-dark">
					<th>ФИО</th>
					<th>Почта</th>
					<th>Роль</th>
				</tr>
				<?php if($errorMessage === NULL): ?>
                <?php foreach($personsObject as $person): ?>
                <tr>
                    <td>
                        <button  class="btn btn-default text-white"
                                 type="button" data-toggle="collapse"
                                 data-target="#collapseExample<?= $person->getId() ?>"
                                 aria-expanded="false" aria-controls="collapseExample<?= $person->getId() ?>">
                            <?= $person->getFullName() ?>
                        </button>
                        <!-- BEGIN hidden block countains full info of person -->
                        <div class="collapse" id="collapseExample<?= $person->getId() ?>" style="position: absolute; z-index: 2;">
                            <div class="card card-body col-12">
                                <?= $person->getInfo() ?>
                            </div>
                        </div>
                        <!-- NED hidden block fuul inso person -->
                    </td>
                    <td><?= $person->getEmail() ?>
                        <a href="mailto:<?= $person->getEmail() ?>" class="btn btn-secondary">Написать</a>
                    </td>
                    <td><?= $person->getRole() ?></td>
                </tr>
                <?php endforeach; ?>
				<?php endif; ?>
			</table>	
		</div>
	</div>
	<div class="container">
		<div class="navbar navbar-expand bg-dark navbar-dark col-md-12">
			<a href="index.php" class="navbar-brand">
				<span class="badge badge-primary text-dark">ADMINKA</span>
			</a>
		</div>
	</div>
</body>
</html>