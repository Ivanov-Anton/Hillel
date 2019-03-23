<?php
class DB
{
	public static $name;
	public static $codeMySQL;
	// method to output an error message
	public static function mssg($message, $exception = NULL)
	{
		if (!$_GET['message']) {
		    // Normal output of the error
			if (empty($exception)) {
				header('Location: index.php?message=' . $message);
			// Detailed output of the error
			} elseif (is_a($exception, 'PDOException')) {
			    self::$codeMySQL = $exception->getCode();
				header('Location: index.php?message=' . $message .
					', file: ' . basename($exception->getFile()) .
					', line: ' . $exception->getLine() .
					', codeMySQL: ' . $exception->getCode());
			}
		}
	}
	public static function getConnect()
	{
		try {
			$db = new PDO(
				'mysql:host=localhost;dbname=university',
				'univers_user',
				'123'
			);
			$db->setAttribute(
				PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION
			);
			return $db;
		} catch (PDOException $e) {
			echo "Unable to connect to database, " . $e->getMessage();
			die;
		}
	}
}