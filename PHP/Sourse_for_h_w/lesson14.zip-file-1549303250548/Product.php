<?php

class Product
{
	private $id;
	private $title;
	public $description;
	public $price;

	public function getId()
	{
		return $this->id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	// public $createAt = time();// <-- wrong

	public function __construct($id = 0, $title = 'New Product', $price = 0, $description = 'Default')
	{
		$this->id = $id;
		$this->title = $title;
		$this->price = $price;
		$this->description = $description;
	}

	public function getInfo()
	{
		return $this->title . ' Price: $' . $this->price;
	}

	public function applyDiscount($discount)
	{
		$this->price -= ($this->price * $discount / 100);
	}

	public function save()
	{
		$db = Application::$db;

		$sql = 'update products 
			set
				title = :title,
				description = :description,
				price = :price
			where
				id = :id
		';

		$query = $db->prepare($sql);

		$query->bindValue(':title', $this->title);
		$query->bindValue(':description', $this->description);
		$query->bindValue(':price', $this->price);
		$query->bindValue(':id', $this->id);

		$query->execute();
	}
}
