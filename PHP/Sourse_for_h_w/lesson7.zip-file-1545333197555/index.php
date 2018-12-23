<?php

require_once 'lib.php';

// $_GET, $_POST, $_REQUEST <-- superglobal

$name = 'Julia';

echo $name;

echo '<br>';

echo sayHello('John', 'Smith');
// echo 'Welcome onboard, John Smith<br>';

// ...

$a = sayHello('Alex');
echo $a;

echo sayHello('Steve', 'Jobs');

echo '<br>';

echo checkAge(12, 'Johnny');
echo checkAge(38, 'Bob');

// count([1,2]);

