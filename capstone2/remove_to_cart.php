<?php 
	session_start();

	if(isset($_GET['index'])){
		$index = $_GET['index'];

		unset($_SESSION['cart'][$index]);

		if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
   			
   			
		}else{
			unset($_SESSION['cart']);
		}



	}
	header('location: cart.php');

?>