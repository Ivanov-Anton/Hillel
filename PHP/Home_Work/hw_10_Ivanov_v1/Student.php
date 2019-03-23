<?php
require_once('Person.php');
class Student extends Person
{
	
	// средний бал студента 
	private $rating = 0;
	public function __construct($name, $email, $phone, $rating)
	{
		parent::__construct($name, $email, $phone);
		$this->rating = $rating;
	}
	public function showInfo()
	{
		$allInfoPerson = parent::showInfo();
		$allInfoPerson .=  'рейтинг: ' . $this->rating . '';
		return $allInfoPerson;
	}
}