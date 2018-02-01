<?php
session_start();

require 'connection.php';

$username = $_POST['username']; //user input
$password = sha1($_POST['password']); //user input

$sql = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$status = $row['status'];
		if($status == 'active'){
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $row['role'];
			header('location: index.php');
		}else{
			header('location: index.php?ban=true');
		}
	} else {
		header('location: index.php?modal=true');
	}

?>