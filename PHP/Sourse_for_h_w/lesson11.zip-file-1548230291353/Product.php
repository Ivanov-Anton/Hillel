<?php

class Product
{
	public $title;
	public $price;
	public $category;

	// public $createAt = time();// <-- wrong

	public function __construct($title = 'New Product', $price = 0, $category = 'Default')
	{
		$this->title = $title;
		$this->price = $price;
		$this->category = $category;
	}

	public function getPath()
	{
		$path = $this->category . ' / ' . $this->title;
		return $path;
	}

	final public function getInfo()
	{
		return $this->title . ' Price: $' . $this->price;
	}

}
