<?php

require_once('Product.php');

$item1 = new Product('Macbook', 1000, 'Notebook');

echo $item1->getPath();
echo '<br>';

$item2 = new Product();
echo $item2->getPath();
echo '<br>';

$item3 = new Product;
echo $item3->getPath();
echo '<br>';

// var_dump($item1, $item2, $item3);

$a = 10;
$b = &$a;
$a = 20;

echo $b;

$item4 = clone $item1;

var_dump($item1, $item4);

$item4->title = 'Thinkpad';

var_dump($item1, $item4);

