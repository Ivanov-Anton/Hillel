<?php

define('EUR', 31);

function uahToEur($uah, $rate = null)
{
	$result = $rate != null
		? round($uah / $rate, 2)
		: round($uah / EUR, 2);

	// if ($rate != null) {
	// 	$result = round($uah / $rate, 2);
	// } else {
	// 	$result = round($uah / EUR, 2);
	// }
	return $result;
}

$uah = 1500;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Currencies</title>
</head>
<body>
	<p>Uah: <?=$uah?></p>
	<p>Euro: <?=uahToEur($uah)?></p>
	<p>Euro2: <?=uahToEur($uah, 32)?></p>
</body>
</html>