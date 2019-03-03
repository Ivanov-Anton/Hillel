<?php

session_start();

if (!isset($_GET['id'])) {
	header('Location: index.php');
	die;
}

$id = (int) $_GET['id'];

if (!isset($_SESSION['user_cart'])) {
	$_SESSION['user_cart'] = [];
}

// if (in_array($id, $_SESSION['user_cart'])) {
// 	$_SESSION['user_cart'][] = $id;
// }

if (!isset($_SESSION['user_cart'][$id])) {
	// $_SESSION['user_cart'] = [];
	$_SESSION['user_cart'][$id] = 1;
} else {
	$_SESSION['user_cart'][$id]++;
}

// remove

if (isset($_SESSION['user_cart'][$id])) {
	$_SESSION['user_cart'][$id]--;
}

if ($_SESSION['user_cart'][$id] <= 0) {
	unset($_SESSION['user_cart'][$id]);
}


