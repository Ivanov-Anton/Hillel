<?php 
	/**
	 *	Главный класс для отеля
	 *	private $title - заоловок отеля
	 *	private $shortDescription - короткое описание
	 *	private $description - полное описание
	*/
	class Hotel
	{	
		private $title;
		private $shortDescription = 'Без описание';
		private $description = 'Без описание';
		public $isPremier;
		public static $visitedHotelsList;
		private static $nameCookieVisit;
		public function __construct($isPremier, $title = 'Без название')
		{
			$this->isPremier = (boolean) $isPremier;
			$this->title = $title;
		}
		public function setTitle($title)
		{
			$this->title = $title;
		}
		public function setShortDescription($shortDescr)
		{
			$this->shortDescription = $shortDescr;
		}
		public function setDescription($descr)
		{
			$this->description = $descr;
		}
		public function getTitle()
		{
			return $this->title;
		}
		public function getShortDescription()
		{
			return $this->shortDescription;
		}
		public function getDescription()
		{
			return $this->description;
		}
		public static function recordVisitedHotels($nameCookie)
		{
			self::$nameCookieVisit = $nameCookie;
			$valueForCookie = json_encode(self::$visitedHotelsList);
			self::sendVisitCookie($nameCookie, $valueForCookie);
		}
		private static function sendVisitCookie($name = '', $value = '')
		{
			$name = self::$nameCookieVisit;
			if (!is_array($value)) {
				$value = json_encode(self::$visitedHotelsList);;
			}
			setcookie($name, $value, time() + 86400);
		}
		public static function getVisitedList()
		{
			self::$visitedHotelsList = (array) json_decode($_COOKIE['visitedHotels'],true);
			return self::$visitedHotelsList;
		}
		public function recordVisitedHotelsById($id)
		{
			if (!$this->isAlredyExist($id)) {
				self::$visitedHotelsList[] = ['id' => $id, 'title' => $this->title];
				$this->sendVisitCookie();
			}
		}
		public static function isExistVisitHotel()
		{
			if (count(self::$visitedHotelsList) > 0) {
				return true;
			} else {
				return false;
			}
		}
		public static function getNumVisit()
		{
			return count(self::$visitedHotelsList);
		}
		private function isAlredyExist($id)
		{
			$isExistVisit = false;
			if (self::isExistVisitHotel()) {
				foreach (Hotel::$visitedHotelsList as $key => $visitItem) {
					// если текущий номер отеля совпадает с каким-то елементом из списка посещенных
					if ($visitItem['id'] == $id) {
						$isExistVisit = true;
						break;
					}
				}
			}
			return $isExistVisit;
		}
	}