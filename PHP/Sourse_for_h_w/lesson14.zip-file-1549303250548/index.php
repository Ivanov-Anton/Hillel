<?php

require_once('Application.php');
require_once('Product.php');
require_once('ProductFactory.php');

$app = Application::getInstance();


// $app->db;

// $product = ProductFactory::createProduct('Thinkpad', 'Some descr', 700);


$product = ProductFactory::createFromDb(1);

// $product->applyDiscount(10);
$product->title = 'Thinkpad';

$product->save();

echo 'Edit success';
