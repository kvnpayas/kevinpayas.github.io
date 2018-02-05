<?php function title(){
	echo "Order History Page";
}
?>
<?php function display_content(){	
	require 'connection.php';
 ?>

<div class="row viewWearCont grey lighten-4">
	<div class="col l12 m12 s12 center">
		<h5 class="z-depth-3 green lighten-1 white-text">History Order</h5>
	</div>
	<div class="row">
		<div class="col l12 m12 s12">
			<ul class="collection with-header">

				<?php 
				$user = $_SESSION['username'];
				$sql1 = "SELECT * FROM users WHERE user_name = '$user'";
				$result1 = mysqli_query($conn,$sql1);
				$users = mysqli_fetch_assoc($result1);
				$id = $users['id'];

				$sql = "SELECT date_purchased,id FROM purchase_order WHERE user_id = '$id'";
				$result = mysqli_query($conn,$sql);
				while($item = mysqli_fetch_assoc($result)) {
					$date = $item['date_purchased'];
					$timestamp = date('F j, Y, g:i a',strtotime($date));
					$pur_id1 = $item['id'];
					
					echo "<li class='collection-header green lighten-1 white-text '><h4 >$timestamp</h4></li>";
										$sql2 = "SELECT * FROM order_details WHERE user_id = '$id'";
					$result2 = mysqli_query($conn,$sql2);
					while($row = mysqli_fetch_assoc($result2)) {
						$cat = $row['category_id'];

						$sql3 = "SELECT * FROM order_details WHERE purchase_id = '$pur_id1'";
						$result3 = mysqli_query($conn,$sql3);
						while($rows = mysqli_fetch_assoc($result3)) {
							$pur_id = $rows['purchase_id'];
							$items = $rows['item_id'];
						// $date = $row['date_purchased'];
					
					
					// echo $item['category_id'];
					if ($rows['category_id'] == 1) {
						$sql2 = "SELECT name,price FROM phone_tablet WHERE id = '$items'";
						$result2 = mysqli_query($conn,$sql2);
						$row = mysqli_fetch_assoc($result2);
						$name = $row['name'];
						$price = $row['price'];
						echo "<li class='collection-item'>
							<div><p>$name<p>
							<p>Php: $price<p></div></li>";
						
					}else if ($rows['category_id'] == 3) {
						$sql2 = "SELECT name,price FROM wears WHERE id = '$items'";
						$result2 = mysqli_query($conn,$sql2);
						$row = mysqli_fetch_assoc($result2);
						$price = $row['price'];
						$name = $row['name'];
						echo "<li class='collection-item'>
							<div><p>$name<p>
							<p>Php: $price<p></div></li>";
					}
				}
			}}
				?>
			 </ul>

		</div>
	</div>
</div>


<?php } 
require "template.php";
?>