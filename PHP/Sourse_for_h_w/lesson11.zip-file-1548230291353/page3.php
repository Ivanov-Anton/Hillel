<?php

	class MyClass
	{
		public $a = 1;
		protected $b = 2;
		private $c = 3;

		protected function myMethod()
		{
			return 'Hello world';
		}
	}

	class MySubClass extends MyClass
	{
		public function getB()
		{
			return $this->b;
		}

		public function getC()
		{
			return $this->c;
		}

		public function myMethod()
		{
			return parent::myMethod();
			// return 'Some text';
		}
	}

	$item1 = new MyClass;

	echo $item1->a;
	// echo $item1->b; // error
	// echo $item1->c; // error

	$item2 = new MySubClass;

	echo $item2->getB();
	echo $item2->getC();
	echo $item2->myMethod();