<?php
	require_once('createHotels.php');
	/**
	 * Output data mainController
	 * $visitedHotelList - contains array with visited hotel like array[index]=>array['id','title'];
	*/
	// если впервые клиент попал то пропустить получение списка посещенных отелей
	if (isset($_COOKIE['visitedHotels'])) {
		Hotel::visitedHotelsGet('visitedHotels');
	}
	Hotel::visitedHotelsBuild('visitedHotels');
	// формирование будущего списка посещений и последущая отправка списка в куку.

	$isResponseSuccess = false;
	

	if (!empty($_GET['id'])) {
		$idHotel = (int) htmlspecialchars($_GET['id']);
		$isPremier = $hotels[$idHotel]->isPremier;
		$titleHotel = $hotels[$idHotel]->getTitle();
		// из под текущего обекта вызываем метод добавление списка и и послещущая отправка в куку
		$hotels[$idHotel]->visitedHotelsRecordById($idHotel);
		$isResponseSuccess = true;
	}
	// если есть хотя бы один визи 
	$visitedHotelsIsExist = (boolean) Hotel::visitedHotelsIsExist();
	
	if ($visitedHotelsIsExist) {
		// visitedHotelsList - содержит массив со списком посещений
		$visitedHotelsList = Hotel::$visitedHotelsList;
	} else {
		$visitedHotelsList = '';
	}