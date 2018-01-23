<?php
	

	$index = $_POST['index'];

	$string = file_get_contents('items.json');
	$items  = json_decode($string, true);

	$name = $items[$index]['name'];
	$description = $items[$index]['description'];
	$price = $items[$index]['price'];
	$img = $items[$index]['img'];
	echo "<h5>Are you Sure you want to delete  this Item?</h5><br>";
	echo "<img src='$img' name='img'><br><br>";
	echo "<label>Name: </label><p>$name</p>";
	echo "<label>Description: </label><p>$description</p>";
	echo "<label>Price: </label><p>$price</p>";
	echo "<a class='waves-effect waves-light btn red' href='delete.php?index=$index'>Delete</a>";
	echo '<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat blue">Cancel</a>
    </div>';
