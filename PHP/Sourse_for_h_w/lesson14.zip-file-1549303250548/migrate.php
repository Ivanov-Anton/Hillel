<?php

require_once('Application.php');
Application::connectDb();
$db = Application::$db;
$sql = 'create table products (
	id int auto_increment primary key,
	title varchar(250),
	description text,
	price float
)
';
$db->exec($sql);
$sql = 'insert into products set 
	title=:title,
	description = :description, 
	price = :price
';

$query = $db->prepare($sql);
$query->bindValue(':title', 'Macbook');
$query->bindValue(':description', 'Apple notebook');
$query->bindValue(':price', 1500);
try {
	$query->execute();
} catch(PDOException $e) {
	echo "Error databases";
}


echo "\n";
