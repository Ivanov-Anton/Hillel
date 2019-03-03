<?php

// old 

// $connect = mysqli_connect(
// 	'localhost',
// 	'booking_user',
// 	'123456',
// 	'booking'
// );

function login($user, $password)
{
	if ($user == 'admin' 
		&& $password == '123'
	) {
		return true;
	}

	throw new Exception('Auhtorization error');
}

try {
	login('admin', '1234');
	echo 'success';
} catch (Exception $e) {
	echo 'login fail, reason: ' . $e->getMessage();
}
