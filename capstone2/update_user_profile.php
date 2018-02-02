<?php
session_start();
require 'connection.php';

$username = $_SESSION['username'];


$update_option = $_GET['id'];

	if ($update_option == '1') {
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$contact = $_POST['contact'];
		$email = $_POST['email_name'];
		$address = $_POST['address'];
		
		$sql = "SELECT * FROM users WHERE user_name = '$username'";
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_assoc($result);
		$id = $user['id'];

		$sql1= "UPDATE users SET first_name = '$firstname',last_name = '$lastname',
			contact_number = '$contact',
			email_address = '$email',
			address = '$address'
		WHERE id = '$id'";

		mysqli_query($conn,$sql1) or die(mysqli_error($conn));

		header('location: user_edit_profile.php?update=yes');

	}else if($update_option == '2') {
		$pass = sha1($_POST['editPass']);
		
		$sql = "SELECT * FROM users WHERE user_name = '$username'";
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_assoc($result);
		$id = $user['id'];

		$sql1= "UPDATE users SET password = '$pass'
		WHERE id = '$id'";

		mysqli_query($conn,$sql1) or die(mysqli_error($conn));

		header('location: user_edit_profile.php?update=yes');

	}

?>