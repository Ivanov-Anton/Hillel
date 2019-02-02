<?php

class Notebook extends Product
{
	public $diskType = 'SSD';

	public function getInfo()
	{
		$info = parent::getInfo();

		$info .= '; Disk type: ' . $this->diskType;

		return $info;
	}
}
