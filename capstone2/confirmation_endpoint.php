<?php 

require 'connection.php';

	$id = $_GET['index'];

	$sql = "UPDATE purchase_order SET delivery_status = 'delivered'
	WHERE id = '$id'";

	mysqli_query($conn,$sql) or die(mysqli_error($conn));

	header('location: admin_view_orders.php?msg=true#pendingOrders');



?>