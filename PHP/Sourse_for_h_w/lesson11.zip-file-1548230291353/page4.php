<?php

class MyClass 
{
	public static $name = 'John Doe';
	public static $counter = 0;

	public static function addOne()
	{
		// echo 'Hello world';
		// $this->counter++;
		self::$counter++;
		// MyClass::
	}

	public function __construct()
	{
		self::$counter++;
	}

}


echo MyClass::$counter;

// echo MyClass::addOne();
// echo MyClass::$counter;

$item = new MyClass();

// $item->addOne(); // <<< wrong

echo MyClass::$counter;

$item2 = new MyClass();
echo MyClass::$counter;

$item3 = new MyClass();
echo MyClass::$counter;
