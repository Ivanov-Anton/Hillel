<?php

class Notebook extends Product
{
	public $diskType = 'SSD';

	// override
	public function __construct($title, $price, $category, $diskType)
	{
		parent::__construct($title, $price, $category);
		$this->diskType = $diskType;
	}

	public function getInfo()
	{
		$info = parent::getInfo();
		// equals:
		// $info = $this->title . ' Price: $' . $this->price;

		$info .= '; Disk type: ' . $this->diskType;

		return $info;
	}
}
