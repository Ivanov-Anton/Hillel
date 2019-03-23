<?php
require_once('Person.php');
class Coach extends Person
{
	private $course = '';
	public function __construct($name, $email, $phone, $course)
	{
		parent::__construct($name, $email, $phone);
		$this->course = $course;
	}
	
	public function showInfo()
	{
		$allInfoPerson = parent::showInfo();
		$allInfoPerson .=  'курс: ' . $this->course . '';
		return $allInfoPerson;
	}
}