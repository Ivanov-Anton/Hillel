<?php

function sayHello($firstName, $lastName = 'NoLastname')
{
	$result = 'Welcome onboard, ' . $firstName . ' ' . $lastName . '<br>';

	return $result;
}

function checkAge($age, $name)
{
	$result = '';

	if ($age >= 18) {
		// welcome
		$result = sayHello($name);
	} else {
		$result = 'Sorry try again later<br>';
	}

	return $result;
}

