<?php
		
	session_start();

	$index = $_GET['index'];
	$quantity = $_POST['quantity'];

	
	$string = file_get_contents('items.json');
	$items  = json_decode($string, true);
	
	if(isset($_SESSION['cart'][$index])){
		$_SESSION['cart'][$index] += $quantity;
		// $_SESSION['cart'][$index] = $_SESSION['cart'][$index] + $quantity;
	}else {
		$_SESSION['cart'][$index] = $quantity;
	}
	// if(isset($_SESSION['cart'][$change])){
	// 	$_SESSION['cart'][$change] = $quantity;
	// }
	print_r($_SESSION['cart']);
	header('location: items.php');

?>