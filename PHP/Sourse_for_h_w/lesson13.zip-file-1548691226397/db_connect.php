<?php

try {
	$db = new PDO(
		'mysql:host=localhost;dbname=booking',
		'booking_user',
		'123456'
	);

	$db->setAttribute(
		PDO::ATTR_ERRMODE, 
		PDO::ERRMODE_EXCEPTION
	);
} catch (PDOException $e) {
	echo 'Database connectin error';
	die;
}

