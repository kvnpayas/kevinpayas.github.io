<?php
		session_start();

		$string = file_get_contents('user.json');
		$users  = json_decode($string, true);

		$user = $_POST['username'];
		$pass = $_POST['password'];

		// echo "<h1>".htmlspecialchars($_GET['input'])." ".htmlspecialchars($_GET['name'])."</h1>";
		
		if($users[$user] == $pass){
			$_SESSION['username'] = $user;
			header('location:items.php');
		} else {
			echo "Failed to login. Incorrect login credentials";
		}
		


?>

