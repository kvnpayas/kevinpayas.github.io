
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
				<th>Name</th>
				<th>date Purchased</th>
				<th>Price</th>
				<?php 
				$user = $_SESSION['username'];
				$sql1 = "SELECT * FROM users WHERE user_name = '$user'";
				$result1 = mysqli_query($conn,$sql1);
				$users = mysqli_fetch_assoc($result1);
				$id = $users['id'];
				$sql = "SELECT * FROM order_details WHERE user_id = '$id'";
				$result = mysqli_query($conn,$sql);
				while($item = mysqli_fetch_assoc($result)) {
					$items = $item['item_id'];
					$date = $item['purchase_date'];
					// echo $item['category_id'];
					if ($item['category_id'] == 1) {
						$sql2 = "SELECT name,price FROM phone_tablet WHERE id = '$items'";
						$result2 = mysqli_query($conn,$sql2);
						$row = mysqli_fetch_assoc($result2);
						$name = $row['name'];
						$price = $row['price'];
						echo "<tr>";
						echo "<td>$name</td>";
						echo "<td>$date</td>";
						echo "<td>Php: $price</td>";
						echo "</tr>";
					}else if ($item['category_id'] == 3) {
						$sql2 = "SELECT name,price FROM wears WHERE id = '$items'";
						$result2 = mysqli_query($conn,$sql2);
						$row = mysqli_fetch_assoc($result2);
						$price = $row['price'];
						$name = $row['name'];
						echo "<tr>";
						echo "<td>$name</td>";
						echo "<td>$date</td>";
						echo "<td>Php: $price</td>";
						echo "</tr>";
					}
				}
				?>
				<tr>
					<td></td>
					<td></td>
					<td>
						<?php 
							$sql3 = "SELECT SUM(price) as total FROM order_details WHERE user_id = '$id'";
							$result3 = mysqli_query($conn,$sql3);
							$total = mysqli_fetch_assoc($result3);
							echo "Total Purchased: Php ";
							echo $total['total'];
						?>
					</td>
				</tr>
			</table>

		</div>
	</div>
</div>


<?php } 
require "template.php";
?>