<?php 

class Phone extends Product
{
	public $simCardsCount = 1;

	public function __construct($title, $price, $category, $simCardsCount)
	{
		parent::__construct($title, $price, $category);
		$this->simCardsCount = $simCardsCount;
	}

	public function getInfo()
	{
		$info = parent::getInfo();
		$info .= '; Sim Cards Count: ' . $this->simCardsCount;

		return $info;
	}

}