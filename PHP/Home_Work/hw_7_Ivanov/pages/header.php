<header>
	<nav class="navbar navbar-dark bg-dark navbar-expand">
		<a class="navbar-brand col-md-2" href="/index.php">
			<?= $logo ?>	
		</a>


		<div class="collapse navbar-collapse" id="mynavbar">
			<ul class="navbar-nav mr-auto">
				<!--Using the path relative to the Document root -->
				<li class="nav-item"><a class="nav-link" href="/index.php">Главная</a></li>	
				<li class="nav-item"><a class="nav-link" href="/pages/tovars.php">Акксесуары для телефонов</a></li>
				<li class="nav-item"><a class="nav-link disabled" href="/login.php">Компьюютеры</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SSD
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
				<li class="nav-item"><a class="nav-link disabled" href="/login.php">Ноутбуки</a></li>
				<li class="nav-item"><a class="nav-link disabled" href="/login.php">Видео карты</a></li>
				<li class="nav-item"><a class="nav-link disabled		" href="/login.php">Оперативки</a></li>
			</ul>
		</div>
	</nav>
</header><!-- end navbar  -->