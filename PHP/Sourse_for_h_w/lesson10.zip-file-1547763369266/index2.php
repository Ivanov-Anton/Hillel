<?php

require_once('Product.php');
require_once('Notebook.php');

$item = new Notebook();

var_dump($item);
echo '<br>';

$item->title = 'Macbook';

echo $item->getInfo();

