<?php

session_start();
require 'connection.php';

//from menu page
	// $quantity = $_POST['quantity'];
$totalPrice = $_GET['total'];
$address = $_POST['delivery_add'];
$name = $_SESSION['username'];
$sql = "SELECT id FROM users WHERE user_name='$name'";
$result = mysqli_query($conn,$sql);
			$user = mysqli_fetch_assoc($result);
$user_id = $user['id'];

	if(isset($_SESSION['username'])){
		if(isset($_SESSION['cart'])){
			foreach ($_SESSION['cart'] as $index) {
				foreach ($index as $id => $cat) {
					if($cat == 1){
						$sql2 = "SELECT price FROM phone_tablet WHERE id = '$id'";
						$result2 = mysqli_query($conn,$sql2);
						$row = mysqli_fetch_assoc($result2);
						$price = $row['price'];
						$sql1 = "INSERT INTO order_details (user_id,item_id,category_id,delivery_address,price) VALUES ($user_id,$id,$cat,'$address',$price)" ;
						mysqli_query($conn,$sql1) or die(mysqli_error($conn));
					}else if($cat == 3){
						$sql2 = "SELECT price FROM wears WHERE id = '$id'";
						$result2 = mysqli_query($conn,$sql2);
						$row = mysqli_fetch_assoc($result2);
						$price = $row['price'];
						$sql1 = "INSERT INTO order_details (user_id,item_id,category_id,delivery_address,price) VALUES ($user_id,$id,$cat,'$address',$price)" ;
						mysqli_query($conn,$sql1) or die(mysqli_error($conn));
					}
				}
			}
		}else{
			echo "no item";
		}

	}else{
		echo "logIn first";
	}
	
unset($_SESSION['cart']);
header('location: cart.php');

?>