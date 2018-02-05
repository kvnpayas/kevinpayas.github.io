<?php
	$index = $_GET['index'];
	$cat = $_GET['cat'];

	require 'connection.php';
	if ($cat == '1') {
	
		$sql = "DELETE FROM phone_tablet WHERE id = '$index'";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
		// $string = file_get_contents("assets/items.json");
		// $items = json_decode($string, true);

		// unset($items[$index]);

		// $file = fopen('assets/items.json','w');
		// fwrite($file, json_encode($items, JSON_PRETTY_PRINT)); 
		// fclose($file);

		header('location: admin_item_page.php?msg=true#delete');
	}else if ($cat == '3') {
	
		$sql = "DELETE FROM wears WHERE id = '$index'";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
		// $string = file_get_contents("assets/items.json");
		// $items = json_decode($string, true);

		// unset($items[$index]);

		// $file = fopen('assets/items.json','w');
		// fwrite($file, json_encode($items, JSON_PRETTY_PRINT)); 
		// fclose($file);

		header('location: admin_item_page.php?msg=true#delete');
	}

?>