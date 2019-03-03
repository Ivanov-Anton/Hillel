<?php

class MyClass
{
	public static $name = 'John';

	public static function getName()
	{
		return static::$name;
		// return self::$name;
	}
}

class MySubClass extends MyClass
{
	public static $name = 'Bob';

	public static function getName()
	{
		// return static::$name;
		return self::$name;
	}	
}

class MySubSubClass extends MySubClass
{
	public static $name = 'Steve';
	
}

echo MyClass::getName();

echo '<br>';

echo MySubClass::getName();

echo '<br>';

echo MySubSubClass::getName();

