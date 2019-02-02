<?php

class Person
{
	protected $name;
	protected $email;
	protected $phone;
	protected function __construct($name, $email, $phone)
	{
		$this->name = $name;
		$this->email = $email;
		$this->phone = $phone;
	}
	protected function showInfo()
	{
		$allInfoPerson = 
			'Имя: ' . $this->name . 
			'. Имейл: ' . $this->email . 
			'. Телефон: ' . $this->phone . '. '
		;
		return $allInfoPerson;
	}
}