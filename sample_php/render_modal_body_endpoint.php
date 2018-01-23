<?php
	

	$index = $_POST['index'];

	$string = file_get_contents('items.json');
	$items  = json_decode($string, true);

	$name = $items[$index]['name'];
	$description = $items[$index]['description'];
	$price = $items[$index]['price'];
	$img = $items[$index]['img'];
	echo "<h4>EDIT/DELETE</h4>";
	echo "<div class='row'>";
	echo "<form action='editproduct.php?index=$index' method='post'>";
	echo "<img src='$img' class='z-depth-5' name='img'><br><br>";
	echo "<div class='input-field col s6'>";
	echo "<input id='fullName' type='text' value='$name' name='name'>";
	echo "<label class='active' for='product_name'>Product Name</label>";
	echo "</div>";
	echo "<div class='input-field col s12'>";
	echo "<textarea id='textarea1' class='materialize-textarea' name='description'>$description</textarea>";
	echo "<label class='active' for='textarea1'>Description</label>";
	echo "</div>";
	echo "<div class='input-field col s4'>";
	echo "<input id='price' type='number' value='$price' name='price'>";
	echo "<label class='active' for='price'>Price</label>";
	echo "</div>";
	echo "<div class='input-field col s12'>";
	echo "<input type='submit' class='waves-effect waves-light btn blue' value='Update'>";
	echo "<a class='waves-effect waves-light btn red'>Delete</a>";
	echo "</div>";
	echo "</form>";

	echo "</div>";
?>