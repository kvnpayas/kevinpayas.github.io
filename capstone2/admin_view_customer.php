
<?php function display_content(){	
	require 'connection.php';

 ?>

<div class="row center viewWearCont">
	<div class="row"  id="cat">
	<div class="col l12 m12 s12">
		<h5 class="z-depth-3 green lighten-1 white-text">Customer List</h5>
	</div>
	<?php 
		if (isset($_GET['msg'])){
 		 	echo "<script>Materialize.toast('Update Success', 3000);</script>"; 
		}
  	?> 
	<div class="row">
		<div class="row" id="searchName">
			<div class=" col l3 s6 m4">
					<div class="input-field">
						<i class="material-icons prefix">textsms</i>
						<input type="text" id="viewCustomer" class="autocomplete">
						<label for="viewCustomer">Search by Name</label>
						<ul class="autocomplete-content dropdown-content" id="viewCustAppear">
						
				    	</ul>
					</div>
			</div>
			<div class=" col l9 s6 m8">
				<a href="admin_view_customer.php" class="btn green white-text right">View All Customers</a>
			</div>
		<div class="row">
			<div class="col l12 s12 m12 grey lighten-4" id="searchBody">

				<?php 
				if (isset($_GET['id'])) {
					$user = $_GET['id'];
					echo "<table class='grey lighten-4'>
				        	<thead class='green'>
				        		<tr>
				        			<th>Customer Name</th>
				        			<th>Email Address</th>
				        			<th>Account status</th>
				        			<th class='tableLeft'>Action</th>
				        		</tr>
				        	</thead>
				        	<tbody>";
				    $sql = "SELECT * FROM users WHERE role = 'regular' AND user_name = '$user'";
				    $result = mysqli_query($conn,$sql);
				    while($cust = mysqli_fetch_assoc($result)){
				    	$id = $cust['id'];
				    	$status = ucfirst($cust['status']);
				    	$first_name = ucfirst($cust['first_name']);   
				    	$last_name = ucfirst($cust['last_name']); 
				    	$email = $cust['email_address'];
				    	echo "<tr>
				    			<td>$first_name".' ' ."$last_name</td>
				    			<td>$email</td>
				    			<td>$status</td>
				    			<td><form class='center grey lighten-4' method='post' action='customer_account.php?id=$id'>
				    				<input name='account' type='radio' id='ok' value='active' checked/>
				    				<label for='ok'>Active Account</label>

				    				<input name='account' type='radio' id='ban' value='ban'/>
				    				<label for='ban'>Ban Account</label>
   									<input type='submit' class='btn' value='submit'/>
				    			</form></td>
				    		</tr>";  
				    }
				    echo "</tbody>
				    	</table>";

					
				}else{

					echo "<table>
				        	<thead class='green'>
				        		<tr>
				        			<th>Customer Name</th>
				        			<th>Email Address</th>
				        			<th>Account Status</th>
				        			<th>Action</th>
				        		</tr>
				        	</thead>
				        	<tbody>";
				    $sql = "SELECT * FROM users WHERE role = 'regular'";
				    $result = mysqli_query($conn,$sql);
				    $x=1;
				    while($cust = mysqli_fetch_assoc($result)){
				    	$id = $cust['id'];
				    	$status = ucfirst($cust['status']);
				    	$first_name = ucfirst($cust['first_name']);   
				    	$last_name = ucfirst($cust['last_name']); 
				    	$email = $cust['email_address'];
				    	echo "<tr>
				    			<td>$first_name".' ' ."$last_name</td>
				    			<td>$email</td>
				    			<td>$status</td>
				    			<td><form class='center grey lighten-4' method='post' action='customer_account.php?id=$id'>
				    				<input name='account' type='radio' id='ok$x' value='active' checked/>
				    				<label for='ok$x'>Active Account</label>

				    				<input name='account' type='radio' id='ban$x' value='ban'/>
				    				<label for='ban$x'>Ban Account</label>
   									<input type='submit' class='btn' value='submit'/>
				    			</form></td>
				    		</tr>"; 
				    		$x++;
				    } 
				    echo "</tbody>
				    	</table>";
				}
				?>

			</div>
		</div>
	</div>
</div>


<?php } 
require "template.php";
?>