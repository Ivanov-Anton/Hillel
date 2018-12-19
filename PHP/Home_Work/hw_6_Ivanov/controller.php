<?php

/* 
 * This is file manage some pages of the web aplication
 * index.php main file 
 */
const AGE_LIMIT = 18;
$textMessage = 'Извините вы слишком молоды';
$getUserName = '';
$getStatusName ='';
$getAgeName = 0;
$getCommentName = '';
if (isset($_POST['userName'])) {
	$getUserName = htmlspecialchars($_POST['userName']);    
}
if (isset($_POST['statusName'])){
	$getStatusName = htmlspecialchars($_POST['statusName']);
}
if (isset($_POST['ageName'])){
	$getAgeName = htmlspecialchars($_POST['ageName']);
}
if (isset($_POST['commentName'])){
	$getCommentName = htmlspecialchars($_POST['commentName']);
}
if (isset($_POST['ageName']) && $getAgeName < AGE_LIMIT) {
	header('Location: ./pageInfo.php');
	echo 'true';
} elseif ($getAgeName >= AGE_LIMIT) {
	header('Location: ./personalUserPage.php?'.
			'userName=' . $getUserName . 
			'&statusName=' . $getStatusName . 
			'&ageName=' . $getAgeName .
			'&commentName=' . $getCommentName
	);
}



