<?php

	$a = 10;
	$b = &$a;
	$b = 20;

	echo 'a = ' . $a;
	echo '<br>';
	echo 'b = ' . $b;

	// ---

	echo '<br><br>';

	// BAD way
	function addTenWrong(&$a)
	{
		$a += 10;
	}

	$c = 10;
	addTenWrong($c);
	echo $c;

	// GOOD way
	function addTen($a)
	{
		return $a + 10;
	}

	$c = 10;
	$c = addTen($c);
	echo $c;

	//

	echo '<br><br>';

	$func = function ($a) {
		return $a + 20;
	};

	echo $func(20);
