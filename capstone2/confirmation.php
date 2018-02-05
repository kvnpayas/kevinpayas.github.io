

<?php $index = $_POST['index'];
// $string = file_get_contents("assets/items.json");
// $items = json_decode($string, true);
require 'connection.php'; ?>

<div class="modal-content">
	<h5 class="center">Are you sure this item has been delivered?</h5>
      <?php 
		$sql = "SELECT purchase_order.id,purchase_order.date_purchased,purchase_order.delivery_status,purchase_order.total_price,purchase_order.user_id, users.first_name,users.last_name FROM purchase_order JOIN users ON(purchase_order.user_id = users.id)  WHERE delivery_status = 'pending' AND purchase_order.id = '$index' AND purchase_order.user_id = users.id";
		$result = mysqli_query($conn, $sql);
		$pur = mysqli_fetch_assoc($result);
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

			echo "<ul class='collection'>
				      <li class='collection-item'><strong class='green-text'>Order No:</strong> $order_no</li>
				      <li class='collection-item'><strong class='green-text'>Name:</strong> $first_name $last_name</li>
				      <li class='collection-item'><strong class='green-text'>Date:</strong>$timestamp</li>
				      <li class='collection-item'><strong class='green-text'>Total:</strong>Php $total</li>
				   </ul>";
		?>

    </div>
    <div class="modal-footer">
    	 <a href="confirmation_endpoint.php?index=<?php echo $order_no ?>" class="modal-action modal-close waves-effect waves-green btn green white-text">Yes</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red white-text">CANCEL</a>
    </div>