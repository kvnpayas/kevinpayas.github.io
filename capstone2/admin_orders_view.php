<?php 
	require 'connection.php';
	$cat = $_REQUEST['category'];


	if ($cat == 'all') { ?>

		<table class="white l12 m12 s12 responsive-table" >
	        <thead>
	          <tr>
	              <th class="green">order No</th>
	              <th class="green">Name</th>
	              <th class="green">Product Name</th>
	              <th class="green">Category Item</th>
	              <th class="green">Item Price</th>
	              <th class="green">Date Purchased</th>
	          </tr>
	        </thead>
	        <tbody>
	        <?php
	        $sql = "SELECT * FROM purchase_order";
	        $result =  mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result)){
				$total_order = $row['total_price'];
				$id = $row['id'];
				$date = $row['date_purchased'];
				$timestamp = date('F j, Y, g:i a',strtotime($date));

				echo "<tr>";
				echo "<td class='grey lighten-1'>$id</td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'>$timestamp</td>";
				echo "</tr>";

				$sql1 = "SELECT * FROM order_details WHERE purchase_id = '$id'";
				$result1 = mysqli_query($conn,$sql1);
				while($order = mysqli_fetch_assoc($result1)){
					$price = $order['price'];
					$user_id = $order['user_id'];
					$cat = $order['category_id'];
					$prod_id = $order['item_id'];

					$sql2 = "SELECT * FROM users WHERE id = '$user_id'";
					$result2 = mysqli_query($conn,$sql2);
					while($cust = mysqli_fetch_assoc($result2)){
						$cust_firstName = ucfirst($cust['first_name']);
						$cust_lastName = ucfirst($cust['last_name']);

						$sql3 = "SELECT * FROM category WHERE id = '$cat'";
						$result3 = mysqli_query($conn,$sql3);
						while($category = mysqli_fetch_assoc($result3)){
							$cat_name = strtoupper($category['category_name']);


							if($cat == 1){
								$sql4 = "SELECT * FROM phone_tablet WHERE id = '$prod_id'";
								$result4 = mysqli_query($conn,$sql4);
								while($prod = mysqli_fetch_assoc($result4)){
									$item_name = $prod['name'];

									echo "<tr>";
									echo "<td></td>";
									echo "<td>$cust_firstName"." "."$cust_lastName</td>";
									echo "<td>$item_name</td>";
									echo "<td>$cat_name</td>";
									echo "<td>Php: $price</td>";
									echo "</tr>";

								}
							}else if($cat == 3){
								$sql4 = "SELECT * FROM wears WHERE id = '$prod_id'";
								$result4 = mysqli_query($conn,$sql4);
								while($prod = mysqli_fetch_assoc($result4)){
									$item_name = $prod['name'];

									echo "<tr>";
									echo "<td></td>";
									echo "<td>$cust_firstName"." "."$cust_lastName</td>";
									echo "<td>$item_name</td>";
									echo "<td>$cat_name</td>";
									echo "<td>Php: $price</td>";
									echo "</tr>";
								}
							}	
						}
					}
				}
				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td>Total: Php $total_order</td>";
				echo "</tr>";
			}

	        ?>

	        
	        </tbody>
      </table> 
	<?php }else if ($cat == 1) { ?>

		<table class="white" >
	        <thead>
	          <tr>
	              <th class="green">order No</th>
	              <th class="green">Name</th>
	              <th class="green">Product Name</th>
	              <th class="green">Category Item</th>
	              <th class="green">Item Price</th>
	              <th class="green">Date Purchased</th>
	          </tr>
	        </thead>
	        <tbody>
	        <?php 
	        $sql = "SELECT DISTINCT purchase_order.id, purchase_order.date_purchased FROM purchase_order LEFT JOIN order_details ON(purchase_order.id = order_details.purchase_id) WHERE order_details.category_id = 1 AND purchase_order.id = order_details.purchase_id";
	        $result = mysqli_query($conn,$sql);
	        while($pur = mysqli_fetch_assoc($result)){
	        	$id = $pur['id'];
	        	$date = $pur['date_purchased'];
				$timestamp = date('F j, Y, g:i a',strtotime($date));

	        	echo "<tr>";
				echo "<td class='grey lighten-1'>$id</td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'>$timestamp</td>";
				echo "</tr>";

				$sql1 = "SELECT * FROM order_details WHERE purchase_id = '$id' AND category_id = 1";
				$result1 = mysqli_query($conn,$sql1);
	        	while($order = mysqli_fetch_assoc($result1)){
	        		$price = $order['price'];
	        		$category = $order['category_id'];
	        		$user_id = $order['user_id'];
	        		$item_id = $order['item_id'];

	        		$sql2 = "SELECT * FROM category WHERE id = '$category'";
	        		$result2 = mysqli_query($conn,$sql2);
	        		while($item_cat = mysqli_fetch_assoc($result2)){
	        			$cat_name = strtoupper($item_cat['category_name']);

	        			$sql3 = "SELECT * FROM users WHERE id = '$user_id'";
	        			$result3 = mysqli_query($conn,$sql3);
		        		while($user = mysqli_fetch_assoc($result3)){
		        			$first_name = ucfirst($user['first_name']);
		        			$last_name = ucfirst($user['last_name']);

		        			$sql4 = "SELECT * FROM phone_tablet WHERE id = '$item_id'";
		        			$result4 = mysqli_query($conn,$sql4);
			        		while($item = mysqli_fetch_assoc($result4)){
			        			$product_name = $item['name'];

				        		echo "<tr>";
								echo "<td></td>";
								echo "<td>$first_name"." "."$last_name</td>";
								echo "<td>$product_name</td>";
								echo "<td>$cat_name</td>";
								echo "<td>$price</td>";
								echo "<td></td>";
								echo "</tr>";
							}
						}
					}
		        }
	        }


	        ?>

	        
	        </tbody>
      </table> 
	<?php }else if ($cat == '3') { ?>

		<table class="white" >
	        <thead>
	          <tr>
	              <th class="green">order No</th>
	              <th class="green">Name</th>
	              <th class="green">Product Name</th>
	              <th class="green">Category Item</th>
	              <th class="green">Item Price</th>
	              <th class="green">Date Purchased</th>
	          </tr>
	        </thead>
	        <tbody>
	        <?php
	        $sql = "SELECT DISTINCT * FROM purchase_order";
	        $result =  mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result)){
				$total_order = $row['total_price'];
				$id = $row['id'];
				$date = $row['date_purchased'];
				$timestamp = date('F j, Y, g:i a',strtotime($date));

				echo "<tr>";
				echo "<td class='grey lighten-1'>$id</td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'></td>";
				echo "<td class='grey lighten-1'>$timestamp</td>";
				echo "</tr>";

				$sql1 = "SELECT * FROM order_details WHERE purchase_id = '$id' AND category_id = 3";
				$result1 = mysqli_query($conn,$sql1);
				while($order = mysqli_fetch_assoc($result1)){
					$price = $order['price'];
					$user_id = $order['user_id'];
					$cat = $order['category_id'];
					$prod_id = $order['item_id'];

					$sql2 = "SELECT * FROM users WHERE id = '$user_id'";
					$result2 = mysqli_query($conn,$sql2);
					while($cust = mysqli_fetch_assoc($result2)){
						$cust_firstName = ucfirst($cust['first_name']);
						$cust_lastName = ucfirst($cust['last_name']);

						$sql3 = "SELECT * FROM category WHERE id = '$cat'";
						$result3 = mysqli_query($conn,$sql3);
						while($category = mysqli_fetch_assoc($result3)){
							$cat_name = strtoupper($category['category_name']);
							$sql4 = "SELECT * FROM wears WHERE id = '$prod_id'";
							$result4 = mysqli_query($conn,$sql4);
							while($prod = mysqli_fetch_assoc($result4)){
								$item_name = $prod['name'];

								echo "<tr>";
								echo "<td></td>";
								echo "<td>$cust_firstName"." "."$cust_lastName</td>";
								echo "<td>$item_name</td>";
								echo "<td>$cat_name</td>";
								echo "<td>Php: $price</td>";
								echo "</tr>";
							}	
						}
					}
				}
				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td>Total: Php $total_order</td>";
				echo "</tr>";
			}

	        ?>

	        
	        </tbody>
      </table> 
	<?php }
	
?>