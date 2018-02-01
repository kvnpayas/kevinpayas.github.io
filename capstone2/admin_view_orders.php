
<?php function display_content(){	
	require 'connection.php';

 ?>

<div class="row center viewWearCont">
	<ul id="tabs-swipe-demo" class="tabs">
		<li class="tab col s3"><a class="active green-text" href="#cat">Search By Category</a></li>
		<li class="tab col s3"><a href="#searchName" class=" green-text">Search by Name</a></li>
	</ul>
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
		<div class="row">
			<div class="col l12 s12 m12 grey lighten-4" id="searchBody">

				<?php 
				if (isset($_GET['id'])) {
				$user = $_GET['id'];

				echo "<div class='col l12 m12 s12 center'>
					<h5 class='z-depth-3 green lighten-1 white-text'>History Order</h5>
					</div>";
				
				echo "<ul class='collection with-header'>";
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
			}
		}
			echo "</ul>";
	}else{
		echo "<h1>No records TO show</h1>";	
	}
				?>

			</div>
		</div>
	</div>
</div>


<?php } 
require "template.php";
?>