<?php

$string = file_get_contents('items.json');
$items  = json_decode($string, true);

function display_content(){

	global $items;
	$user = "";
	if(isset($_SESSION['username'])){
		$user = $_SESSION['username'];
	}
	$selectOption = "all";
	if(isset($_GET['opt'])){
		$selectOption = $_GET['opt'];
	}
	
	
	// $file = fopen('items.json', "w");
	// fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
	// fclose($file);

	echo "<div class='row' >";
	echo "<h1>Hello ".$user."</h1>";

	$categories = array_unique(array_column($items, 'category'));
	echo "<div class='input-field col l3'>
	<form action='#' method='GET'>
	<select name='opt'>
	<option value='all' selected >All</option>";
	foreach ($categories as $category) {
		if($selectOption == $category){
			echo "<option value='$category' selected>$category</option>";
		}else{
			echo "<option value='$category'>$category</option>";
		}
	}
	echo "</select><input class='btn' type='submit' value='SUBMIT'></form></div></div>";

	
	// foreach ($items as $item) {
	// 	echo "<div class='col s12 m6 l4 center-align card-panel hoverable' id='cont'>";
	// 	echo "<img src='".$item['img']."' class='z-depth-5'><br>";
	// 	echo "<h4> ".$item['name']."</h4><br>" ;
	// 	echo "Description: ".$item['description']."<br>";
	// 	echo "Price: ".$item['price']."<br>";
	// 	echo "<a class='waves-effect waves-light btn'>Buy this Shit</a>";
	// 	echo "</div>";

	// }
	echo "<div class='row flex'>";
	foreach ($items as $item => $x) {
		if($selectOption == 'all' || $x['category'] == $selectOption){
			echo "<div class='col l4 center-align card-panel hoverable' id='cont'>";
			echo "<form action='addcart.php?index=$item' method='POST'>";
			echo "<img src='".$x['img']."'><br>";
			echo "<h4> ".$x['name']."</h4><br>" ;
			echo "Description: ".$x['description']."<br>";
			echo "Price: ".$x['price']."<br>";
			if(isset($_SESSION['username']) && $_SESSION['username'] == 'admin'){
				echo "<button class='waves-effect waves-light btn modal-trigger render_modal' data-target='modal1' data-index='$item'>Edit</button>";
				echo "<button class='waves-effect waves-light btn modal-trigger red delete_modal' data-target='modal1' data-index='$item'>Delete</button>";
			}else if(isset($_SESSION['username'])){
				echo "<input type='submit' class='waves-effect waves-light btn green' value='Buy This Shit'>";
				echo "<input id='quantity' type='number' name='quantity' min=0>";
				echo "<label class='active' for='product_name'>Quantity</label>";
				
			}
			
			echo "</form>";
			echo "</div>";

		}
	} //end of foreach

	echo "</div>";
	?>

	<div id="modal1" class="modal modal-fixed-footer">
		<div class="modal-content" id="modal-body">
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
		</div>
	</div>


	<?php

}


require "template.php";
?>

