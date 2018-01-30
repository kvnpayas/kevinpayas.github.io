
<?php function display_content(){	
	require 'connection.php';
 ?>

<div class="row center viewWearCont grey lighten-4">
	<div class="col l12 m12 s12">
		<h5 class="z-depth-3 green lighten-1 white-text">History Order</h5>
	</div>
	<div class="row">
		<div class="col l12 m12 s12">
			<table>
				<th>Customer Name</th>
				<th>Item Name</th>
				<th>Item Category</th>
				<th>date Purchased</th>
				<th>Price</th>
				<?php 
				// $user = $_SESSION['username'];
				$sql1 = "SELECT * FROM users WHERE role = 'regular'";
				$result1 = mysqli_query($conn,$sql1);
				while($users = mysqli_fetch_assoc($result1)){
				$id = $users['id'];
				$first_name = ucfirst($users['first_name']);
				$last_name = ucfirst($users['last_name']);
				$sql = "SELECT * FROM order_details WHERE user_id = '$id'";
				$result = mysqli_query($conn,$sql);
				while($item = mysqli_fetch_assoc($result)) {
					$items = $item['item_id'];
					$date = $item['purchase_date'];
					// echo $item['category_id'];
					if ($item['category_id'] == 1) {
						$sql2 = "SELECT phone_tablet.name,phone_tablet.price,category.category_name FROM phone_tablet JOIN category ON(category.id = phone_tablet.category_id) WHERE phone_tablet.id = '$items'";
						$result2 = mysqli_query($conn,$sql2);
						$row = mysqli_fetch_assoc($result2);
						$name = $row['name'];
						$category = strtoupper($row['category_name']);
						$price = $row['price'];
						echo "<tr>";
						echo "<td>$first_name $last_name</td>";
						echo "<td>$name</td>";
						echo "<td>$category</td>";
						echo "<td>$date</td>";
						echo "<td>Php: $price</td>";
						echo "</tr>";
					}else if($item['category_id'] == 3) {
						$sql2 = "SELECT wears.name,wears.price,category.category_name FROM wears JOIN category ON(category.id = wears.category_id) WHERE wears.id = '$items'";
						$result2 = mysqli_query($conn,$sql2);
						$row = mysqli_fetch_assoc($result2);
						$name = $row['name'];
						$category = strtoupper($row['category_name']);
						$price = $row['price'];
						echo "<tr>";
						echo "<td>$first_name $last_name</td>";
						echo "<td>$name</td>";
						echo "<td>$category</td>";
						echo "<td>$date</td>";
						echo "<td>Php: $price</td>";
						echo "</tr>";
					}
				}}
				?>
				<tr>
					<td></td>
					<td></td>
					<td>
						
					</td>
				</tr>
			</table>

		</div>
	</div>
</div>


<?php } 
require "template.php";
?>