<?php function title(){
	echo "View Orders";
}
?>
<?php function display_content(){	
	require 'connection.php';

 ?>
 <?php 
	if (isset($_GET['msg'])){
		echo "<script>Materialize.toast('Update Success', 3000);</script>"; 
	}
	?> 

<div class="row viewWearCont">
	<div class="row">
		<ul id="tabs-swipe-demo" class="tabs">
			<li class="tab col s3 l4 m4"><a class="active green-text" href="#cat">Search By Category</a></li>
			<li class="tab col s3 l4 m4"><a href="#searchName" class=" green-text">Search by Name</a></li>
			<?php 
				$sql9 = "SELECT COUNT(*) as num FROM purchase_order WHERE delivery_status = 'pending'";
				$result9 = mysqli_query($conn, $sql9);
				$count = mysqli_fetch_assoc($result9);
				$count1 = $count['num'];
				?>
			<li class="tab col s3 l3 m4"><a href="#pendingOrders" class=" green-text">Pending Orders<span class="new badge red white-text"><?php echo $count1 ?></span></a></li>
		</ul>
	</div>
	<div class="row"  id="cat">
	<div class="col l12 m12 s12">
		<h5 class="z-depth-3 green lighten-1 white-text">History Order</h5>
	</div>
	<div class="row">
		<div id="edit" class="col s12">
			<div class="row">
				<div class="input-field col l3">
					<select id="categoriesorder">
						<option value="all" selected>all records</option>
						<?php
						$sql = "SELECT * FROM category";
						$result = mysqli_query($conn, $sql);
						while($rows = mysqli_fetch_assoc($result)) {
							?>
							<option value="<?php echo $rows['id'] ?>"><?php echo $rows['category_name'] ?></option>
							<?php } ?>
					</select>

					<label>Choose Products</label>
				</div>
				
			</div>
		</div>
		<div class="col l12 m12 s12" id="body_order">
			

		</div>
	</div>
	</div>
	<div class="row" id="searchName">
		<div class=" col l3 s6 m6">
				<div class="input-field">
					<i class="material-icons prefix">textsms</i>
					<input type="text" id="autocomplete-input" class="autocomplete">
					<label for="autocomplete-input">Search by Name</label>
					<ul class="autocomplete-content dropdown-content" id="nameAppear">
						
				    </ul>
				</div>
				
		</div>
		<div class="col l3 s6 m6" style="padding-top: 20px;">
			<a href="admin_view_orders.php#searchName" class="btn green white-text">view all</a>
		</div>
		<div class="row">
			<div class="col l12 s12 m12 grey lighten-4" id="searchBody">

				<?php 
				if (isset($_GET['id'])) {
				$user = $_GET['id'];
				$sql1 = "SELECT * FROM users WHERE user_name = '$user'";
				$result1 = mysqli_query($conn,$sql1);
				$users = mysqli_fetch_assoc($result1);
				$id = $users['id'];
				$cust_firstname = strtoupper($users['first_name']);
				$cust_lastname = strtoupper($users['last_name']);

				echo "<div class='col l12 m12 s12 center'>
					<h5 class='z-depth-3 green lighten-1 white-text'>Transaction History of $cust_firstname $cust_lastname</h5>
					</div>";
				
				echo "<ul class='collection'>";

				$sql = "SELECT date_purchased,id FROM purchase_order WHERE user_id = '$id'";
				$result = mysqli_query($conn,$sql);
				while($item = mysqli_fetch_assoc($result)) {
					$date = $item['date_purchased'];
					$timestamp = date('F j, Y, g:i a',strtotime($date));
					$pur_id1 = $item['id'];
					
					echo "<li class='collection-item green lighten-1 white-text '><p style='margin: 0;'>$timestamp</p></li>";
					$sql2 = "SELECT * FROM order_details WHERE user_id = '$id'";
					$result2 = mysqli_query($conn,$sql2);
					while($row = mysqli_fetch_assoc($result2)) {
						$cat = $row['category_id'];

						$sql3 = "SELECT * FROM order_details WHERE purchase_id = '$pur_id1'";
						$result3 = mysqli_query($conn,$sql3);
						while($rows = mysqli_fetch_assoc($result3)) {
							$pur_id = $rows['purchase_id'];
							$cat_ide = $rows['category_id'];
							$items = $rows['item_id'];
						// $date = $row['date_purchased'];

							$sql4 = "SELECT * FROM category WHERE id = '$cat_ide'";
							$result4 = mysqli_query($conn,$sql4);
							while($cat_id = mysqli_fetch_assoc($result4)){
								$cat_name = $cat_id['category_name'];	
							// echo $item['category_id'];
							if ($rows['category_id'] == 1) {
								$sql2 = "SELECT name,price FROM phone_tablet WHERE id = '$items'";
								$result2 = mysqli_query($conn,$sql2);
								$row = mysqli_fetch_assoc($result2);
								$name = $row['name'];
								$price = $row['price'];
								echo "<li class='collection-item'>
									<div><p>$name</p>
									<p>Php: $price</p>
									<p>Category: $cat_name</p>

									</div></li>";
								
							}else if ($rows['category_id'] == 3) {
								$sql2 = "SELECT name,price FROM wears WHERE id = '$items'";
								$result2 = mysqli_query($conn,$sql2);
								$row = mysqli_fetch_assoc($result2);
								$price = $row['price'];
								$name = $row['name'];
								echo "<li class='collection-item'>
									<div><p>$name<p>
									<p>Php: $price<p>
									<p>Category: $cat_name</p>
									</div></li>";
							}
						}
					}
				}
			}
			echo "</ul>";
	}else{
		echo "<table>
				        	<thead class='green'>
				        		<tr>
				        			<th>Customer Name</th>
				        			<th>Email Address</th>
				        			<th>View</th>
				        		</tr>
				        	</thead>
				        	<tbody>";
				    $sql = "SELECT * FROM users WHERE role = 'regular'";
				    $result = mysqli_query($conn,$sql);
				    while($cust = mysqli_fetch_assoc($result)){
				    	$id = $cust['id'];
				    	$users = $cust['user_name'];
				    	$status = ucfirst($cust['status']);
				    	$first_name = ucfirst($cust['first_name']);   
				    	$last_name = ucfirst($cust['last_name']); 
				    	$email = $cust['email_address'];
				    	echo "<tr>
				    			<td>$first_name".' ' ."$last_name</td>
				    			<td>$email</td>
				    			";
			    		echo "<td>
								<a href='admin_view_orders.php?id=$users#searchName' class='btn green white-text'>View orders</a>
			    			</td>
			    		</tr>";  
				    } 
				    echo "</tbody>
				    	</table>";	
	}
				?>

			</div>
		</div>
	</div>
	<div class="row grey lighten-4" id="pendingOrders">
		<div class="col l12 m12 s12">
			<h5 class="z-depth-3 green lighten-1 white-text center">Pending Order</h5
		</div>
		<div class="row">
			<div class="col l12 s12 m12">
				<table>
					<thead>
						<tr>
							<th>Order No.</th>
							<th>Customer Name</th>
							<th>Date Purchased</th>
							<th>Total Price</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$sql = "SELECT purchase_order.id,purchase_order.date_purchased,purchase_order.delivery_status,purchase_order.total_price,purchase_order.user_id, users.first_name,users.last_name FROM purchase_order JOIN users ON(purchase_order.user_id = users.id)  WHERE delivery_status = 'pending' AND purchase_order.user_id = users.id";
						$result = mysqli_query($conn, $sql);
						while($pur = mysqli_fetch_assoc($result)){
							$order_no = $pur['id'];
							$date = $pur['date_purchased'];
							$timestamp = date('F j, Y',strtotime($date));
							$status = $pur['delivery_status'];
							$total = $pur['total_price'];
							$cust_id = $pur['user_id'];

							// $sql1 = "SELECT * FROM users WHERE id = $'cust_id'"; 
							// $result1 = mysqli_query($conn, $sql1);
							// $cust = mysqli_fetch_assoc($result1);
							$first_name = ucfirst($pur['first_name']);
							$last_name = ucfirst($pur['last_name']);

							echo "<tr>";
							echo "<td>$order_no</td>";
							echo "<td>$first_name $last_name</td>";
							echo "<td>$timestamp</td>";
							echo "<td>Php: $total</td>";
							echo "<td>$status</td>";
							echo "<td><button data-target='confirmation' class='btn modal-trigger confirmed green white-text' data-index='$order_no'>Delivered</button></td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="confirmation" class="modal confirmed">
	<div id="modal_con_body">
    
  </div>
  </div>

<?php } 
require "template.php";
?>