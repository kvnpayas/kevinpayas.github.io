<?php

	$index = $_GET['index'];

	$string = file_get_contents('items.json');
	$items  = json_decode($string, true);

	// $new_items = array_splice($items, $index, 1);
	unset($items[$index]);

	$file = fopen("items.json","w");
	fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
	fclose($file);

	header('location: items.php');