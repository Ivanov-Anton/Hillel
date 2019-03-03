<?php

class ProductFactory
{
	public static function createProduct($id, $title, $price, $description)
	{
		$product = new Product($id, $title, $price, $description);

		return $product;
	}

	public static function createFromDb($id)
	{
		$sql = 'select * from products where id = :id';

		$app = Application::getInstance();
		$db = $app->db;

		$query = $db->prepare($sql);
		$query->bindValue(':id', $id);
		$query->execute();

		$data = $query->fetchObject();

		$product = self::createProduct(
			$data->id,
			$data->title,
			$data->price,
			$data->description
		);

		return $product;
	}
}