<?php


	$index = $_GET['index'];

	$string = file_get_contents('items.json');
	$items  = json_decode($string, true);

	$items[$index]['name'] = $_POST['name'];
	$items[$index]['description'] = $_POST['description'];
	$items[$index]['price'] = $_POST['price'];

	$file = fopen("items.json","w");
	fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
	fclose($file);

	header('location: items.php');




