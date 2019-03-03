<?php

require_once('db_connect.php');

try {

	$sql = '
		create table hotels (
			id int not null auto_increment primary key,
			title varchar(200),
			shortDescription text,
			description text
		);
	';

	$db->exec($sql);

	$sql = '
		insert into hotels set
			title = "Black Sea",
			shortDescription = "Short description",
			description = "Black Sea hotel description"
	';

	$db->exec($sql);

	echo 'Migrate success';

} catch (PDOException $e) {
	echo 'Database error';
	die;
}


