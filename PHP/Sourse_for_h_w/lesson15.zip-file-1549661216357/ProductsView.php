<?php

abstract class ProductsView
{
	protected $products = [];

    /**
     * ProductsView constructor.
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function addProduct(Product $product)
	{
        // todo: make changes

		$this->products[] = $product;
	}

	abstract public function show();
}
