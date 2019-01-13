<?php
/* 
 * This is file manage some pages of the web aplication
 * index.php main file 
*/
require_once('../DB/DataBase.php');
function changeInUah($tovars, $course)
{
	foreach ($tovars as $key => $tovar) {
		switch ($tovar['price_type']) {
			case 'usd':
				$tovars[$key]['price_val'] *= $course['usd']['course'];
				break;
			case 'eur':
				$tovars[$key]['price_val'] *= $course['eur']['course'];
				break;
		}
		
	}
	return $tovars;	
}

function isUah ($tovar)
{
	$result = '';
	if ($tovar['price_type'] == 'uah') {
		$result = 'Гривна - ' . $tovar['price_val'];
	} else {
		$result = $tovar['price_val'];
	}
	return $result;
}

$tovars = changeInUah($tovars, $course);
function writeDiscount($tovar)
{
	$result = [
		'priceWithDiscount' => 0,
		'discount' => $tovar['discount_val'],
	];
	
	if ($tovar['discount_type'] == 'percent') {
		$result['priceWithDiscount'] = $tovar['price_val'] - (($tovar['price_val'] / 100) * $tovar['discount_val']);
		$result['discount'] = ($tovar['price_val'] / 100) * $tovar['discount_val'];
	} elseif ($tovar['discount_type'] == 'value') {
		$result['priceWithDiscount'] = $tovar['price_val'] - $tovar['discount_val'];
	}
	return $result;
	
}