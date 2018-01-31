<?php 
	require 'connection.php';
	$cat = $_REQUEST['category'];


	if ($cat == 'all') { ?>
		
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

				$sql3 = "SELECT * FROM purchase_order WHERE user_id = '$id'";
				$result3 = mysqli_query($conn,$sql3);
				while($item3 = mysqli_fetch_assoc($result3)) {
					$pur_id = $item3['id'];
					$total_price = $item3['total_price'];
					echo "<tr>
                            <td>$pur_id</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    ";
				$sql = "SELECT * FROM order_details WHERE user_id = '$id' AND purchase_id = '$pur_id'";
				$result = mysqli_query($conn,$sql);
				while($item = mysqli_fetch_assoc($result)) {

					$items = $item['item_id'];
					$date = $item['purchase_date'];
					$timestamp = date('F j, Y, g:i a',strtotime($date));

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
						echo "<td>$timestamp</td>";
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
						echo "<td>$timestamp</td>";
						echo "<td>Php: $price</td>";
						echo "</tr>";
					}
					}

					echo "<tr>
                            <td>Total: Php $total_price</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    ";
				}
			}
				?>
			</table>
	<?php }else if($cat == 1) { ?> 

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

				$sql3 = "SELECT purchase_order.id,purchase_order.total_price FROM purchase_order JOIN order_details ON(purchase_order.id = order_details.purchase_id) WHERE purchase_order.user_id = '$id' AND order_details.category_id = 1";
				$result3 = mysqli_query($conn,$sql3);
				while($item3 = mysqli_fetch_assoc($result3)) {
					$pur_id = $item3['id'];
					$total_price = $item3['total_price'];
					echo "<tr>
                            <td>$pur_id</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    ";
				$sql = "SELECT * FROM order_details WHERE user_id = '$id' AND purchase_id = '$pur_id' AND category_id = '$cat'";
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
					}

					echo "<tr>
                            <td>Total: Php $total_price</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    ";
				}
			}
				?>
			</table>


	<?php }else if($cat == 3) { ?> 

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

				$sql3 = "SELECT purchase_order.id,purchase_order.total_price FROM purchase_order JOIN order_details ON(purchase_order.id = order_details.purchase_id) WHERE purchase_order.user_id = '$id' AND order_details.category_id = 3";
				$result3 = mysqli_query($conn,$sql3);
				while($item3 = mysqli_fetch_assoc($result3)) {
					$pur_id = $item3['id'];
					$total_price = $item3['total_price'];
					echo "<tr>
                            <td>$pur_id</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    ";
				$sql = "SELECT * FROM order_details WHERE user_id = '$id' AND purchase_id = '$pur_id' AND category_id = '$cat'";
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
					}

					echo "<tr>
                            <td>Total: Php $total_price</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    ";
				}
			}
				?>
			</table>


	<?php } 
?>