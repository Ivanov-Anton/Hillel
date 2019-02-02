<?php

class ProductInfo
{
	public $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

	public function getListItem(): string
	{
		// $li = '<li><b>Breadcrumb:</b>' 
		// 	. $this->product->getPath() 
		// 	. '<b>Price:</b> $' 
		// 	. $this->product->price . '</li>';

		$li = '<li>' . 	$this->product->getInfo() . '</li>';

		return $li;
	}


}