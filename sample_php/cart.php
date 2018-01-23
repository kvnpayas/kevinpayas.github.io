<?php
		
	function display_content(){	

	if(isset($_SESSION['cart'])){
		$string = file_get_contents('items.json');
		$items  = json_decode($string, true);

		$alltotal = 0;
		// print_r($_SESSION['cart']);
		foreach($_SESSION['cart'] as $item => $x){
			$name = $items[$item]['name'];
			$price = $items[$item]['price'];
			$img = $items[$item]['img'];
			$total = $x * $price;
			$alltotal += $total;
			

			echo "<div class='row left-align card-panel' id='cont'>";
			echo "<form action='changequantity.php?index=$item' method='POST'>";
			echo "<div class='col l4 left-align'>";
			echo "<img src='$img'><br>";
			echo "</div>";
			echo "<div class='col l4 left-align'>";
			echo "<h4> $name</h4><br>" ;;
			echo "Price: $price<br>";
			echo "Quantity: $x<br>";
			echo "Total: $total<br>";
			echo "</div>";
			echo "<div class='col l4 left-align'>";
			echo "<input type='number' name='quantity' value='$x' min=1>";
			echo "<input type='submit' class='waves-effect waves-light btn green' value='Change This Shit'>";
			echo "<a class='waves-effect waves-light btn red' href='deleteitem.php?index=$item'>Remove This Shit</a>";
			echo "</div>";
			echo "</form>";
			echo "</div>";
		}
		
		echo "<div class='row'>";
		echo "<h3 class='right'>Grand Total: Php $alltotal </h3>";
		echo "</div>";
	}



		

}
require "template.php";
?>