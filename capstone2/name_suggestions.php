<?php

require 'connection.php';

$sql = "SELECT * FROM users WHERE role = 'regular'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){

	$firstname = $row['first_name'];
	$lastname = $row['last_name'];

	$arrayName[]  = $firstname.' '.$lastname;
}
	// print_r($arrayName);



		$return = '';
		foreach($arrayName as $name){
			$name = strtolower($name);
			$return .= "'$name': null,";
		}

		echo json_encode($return);
