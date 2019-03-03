<?php

class HtmlProductsView extends ProductsView
{
	public function show()
	{
		$html = '';

		foreach ($this->products as $product) {
			$html .= '<p>' . $product->getInfo() . '</p>';
		}

		return $html;
	}
}