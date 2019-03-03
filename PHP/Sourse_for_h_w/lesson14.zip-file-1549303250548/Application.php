<?php

class Application
{
	public $db;

	private static $app;

	public static function getInstance()
	{
		if ($app == null) {
			self::$app = new Application;
			self::$app->connectDb();
		}

		return self::$app;
	}

	public function connectDb()
	{
		try {
			self::$db = new PDO(
				'mysql:host=localhost;dbname=shop',
				'booking_user',
				'123456'
			);

			self::$db->setAttribute(
				PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION
			);
		} catch (PDOException $e) {
			echo 'Database connectin error';
			die;
		}

	}
}