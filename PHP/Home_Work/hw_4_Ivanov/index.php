<?php 
	$titlePageName = 'Курс гривны';
	$descrPage = 'Курс валют в Украине: курс доллара к гривне, курс евро и гривны. Курс валют на сегодня в Украине онлайн.';
	// const for calculation of the hryvna
	const DOLLAR_RATE = 27.7;
	const EURO_RATE = 31.35;
	const STEP = 50;
	const UA_BEFORE = 2000;
	// contains value hrivnia
	$uaFrom = 1000;
?>
<html>
<?php include_once 'head.php' ?>
<body>
	<div class="container">
		<?php include_once 'header.php'?>
		<h2 class="text-center">Курс грианы на сегодня</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Валюта в гривнах</th>
					<th>Валюта в долларах США</th>
					<th>Валюта в евро</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($uaFrom <= UA_BEFORE) : ?>
					<tr>
						<td><?= $uaFrom ?> грн.</td>
						<td><?= round($uaFrom / DOLLAR_RATE,3) ?> usd.</td>
						<td><?= round($uaFrom / EURO_RATE,3) ?> euro.</td>
						<?php $uaFrom += STEP ?>
					</tr>
				<?php endwhile ?>
			</tbody>
		</table>
		<?php include_once 'footer.php' ?>
	</div> <!-- END container -->
</body>
</html>