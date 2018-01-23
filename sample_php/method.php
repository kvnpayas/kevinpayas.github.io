<?php
	function display_content(){
		$user = "";
		if(isset($_SESSION['username'])){
			$user = $_SESSION['username'];
		}
		echo "<h1>Hello ".$user."</h1>";
		// echo "<h1>".htmlspecialchars($_GET['input'])." ".htmlspecialchars($_GET['name'])."</h1>";
		
		echo "<div class='input-field col s6'>";
		echo "<form action='authenticate.php' method='POST'>";
		echo "Username: <input type='text' name='username'><br>";
		echo "Password: <input type='password' name='password'><br>";
		echo "<input type='submit' name='submit' value='Submit'>";
		echo "</form>";
		echo "</div>";
		
}	

require "template.php";
?>

