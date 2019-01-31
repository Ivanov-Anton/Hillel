<?php
	require_once('createHotels.php');
	/**
	 * Output data mainController
	 * $visitedHotelList - contains array with visited hotel like array[index]=>array['id','title'];
	*/
	if (isset($_COOKIE['visitedHotels'])) {
		Hotel::getVisitedList();
	} 
	Hotel::recordVisitedHotels('visitedHotels');

	$isResponseSuccess = false;
	

	if (!empty($_GET['id'])) {
		$idHotel = (int) htmlspecialchars($_GET['id']);
		$isPremier = $hotels[$idHotel]->isPremier;
		$titleHotel = $hotels[$idHotel]->getTitle();
		$hotels[$idHotel]->recordVisitedHotelsById($idHotel);
		$isResponseSuccess = true;
	}
	// если есть хотя бы один визи 
	$isExistVisitHotel = Hotel::isExistVisitHotel();
	$visitedHotelsList = Hotel::$visitedHotelsList;