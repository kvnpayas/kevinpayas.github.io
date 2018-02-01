<?php

require 'connection.php';

$sql = "SELECT * FROM users WHERE role = 'regular'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	$id = $row['id'];
	$user_name = $row['user_name'];
	$firstname = $row['first_name'];
	$lastname = $row['last_name'];

	$arrayName[][$user_name]  = $firstname.' '.$lastname;
}
	// print_r($arrayName);
if (isset($_POST['suggestions'])) {
	$nameInput = strtolower($_POST['suggestions']);

	if (!empty($nameInput)) {
		foreach ($arrayName as $x) {
			foreach ($x as $userName => $name) {
				$name = strtolower($name);

				if (strpos($name, $nameInput) !== false) {

					echo "<li><a href='admin_view_customer.php?id=$userName#searchName' class='collection-item'>".ucwords($name) . "</a></li>";
				}
			}
		}
	}
}
