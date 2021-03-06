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
		public function setDescription($descrFull)
		{
			$this->description = $descrFull;
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
		public static function visitedHotelsBuild($nameCookie)
		{
			self::$nameCookieVisit = $nameCookie;
			$valueForCookie = json_encode(self::$visitedHotelsList);
			self::cookieSend($valueForCookie);
		}
		private static function cookieSend($valueCookie = '')
		{
			$lifeTime = 24 * 3600;
			$nameCookie = self::$nameCookieVisit;
			if (!is_array($valueCookie || $valueCookie == '')) {
				$valueCookie = json_encode(self::$visitedHotelsList);;
			}
			setcookie($nameCookie, $valueCookie, time() + $lifeTime);
		}
		public static function visitedHotelsGet()
		{
			self::$visitedHotelsList = (array) json_decode($_COOKIE['visitedHotels'],true);
			return self::$visitedHotelsList;
		}
		// если нет совпадений в массиве посещений то записать новый обект в просмотренные
		public function visitedHotelsRecordById($idHotel)
		{
			if (!$this->visitedHotelsDuplicate($idHotel)) {
				self::$visitedHotelsList[] = ['idHotel' => $idHotel, 'titleHotel' => $this->title];
				$this->cookieSend();
			}
		}
		public static function visitedHotelsIsExist()
		{
			if (count(self::$visitedHotelsList) > 0) {
				return true;
			} else {
				return false;
			}
		}
		// статичный метод возвращает кол-во посещений
		public static function visitedHotelsGetNum()
		{
			return count(self::$visitedHotelsList);
		}
		// проверка на дублткат
		private function visitedHotelsDuplicate($idHotel)
		{
			$isExistVisit = false;
			if (self::VisitedHotelsIsExist()) {
				foreach (Hotel::$visitedHotelsList as $key => $visitItem) {
					// если текущий номер отеля совпадает с каким-то елементом из списка посещенных
					if ($visitItem['idHotel'] == $idHotel) {
						$isExistVisit = true;
						break;
					}
				}
			}
			return (boolean) $isExistVisit;
		}
	}