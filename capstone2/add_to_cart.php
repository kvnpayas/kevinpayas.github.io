<?php

session_start();

$index = $_GET['index'];
$cat = $_GET['cat'];
$id = $_GET['id'];

//from menu page
	// $quantity = $_POST['quantity'];
	if (isset($_SESSION['cart'])) {
		$_SESSION['cart'][$id][$index]  = $cat;
	}else{
		
		$_SESSION['cart'][$id][$index]  = $cat;	
	}
	
	print_r($_SESSION['cart']);
	header('location: cart.php');

	// if($cat == 1){
	// 	if (isset($_SESSION['cart_phone'])) {
	// 		$_SESSION['cart_phone'][$index]  = $cat;
	// 	}else{
			
	// 		$_SESSION['cart_phone'][$index]  = $cat;	
	// 	}
	// } else if($cat == 3){
	// 	if (isset($_SESSION['cart_wear'])) {
	// 		$_SESSION['cart_wear'][$index]  = $cat;
	// 	}else{
			
	// 		$_SESSION['cart_wear'][$index]  = $cat;	
	// 	}
	// }
	
	// print_r($_SESSION['cart_phone']);
	// echo "<br><br>";
	// print_r($_SESSION['cart_wear']);

?>